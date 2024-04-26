!function(s){"use strict";s("#sidebarToggle, #sidebarToggleTop").on("click",function(e){s("body").toggleClass("sidebar-toggled"),s(".sidebar").toggleClass("toggled"),s(".sidebar").hasClass("toggled")&&s(".sidebar .collapse").collapse("hide")}),s(window).resize(function(){s(window).width()<768&&s(".sidebar .collapse").collapse("hide"),s(window).width()<480&&!s(".sidebar").hasClass("toggled")&&(s("body").addClass("sidebar-toggled"),s(".sidebar").addClass("toggled"),s(".sidebar .collapse").collapse("hide"))}),s("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel",function(e){if(768<s(window).width()){var o=e.originalEvent,l=o.wheelDelta||-o.detail;this.scrollTop+=30*(l<0?1:-1),e.preventDefault()}}),s(document).on("scroll",function(){100<s(this).scrollTop()?s(".scroll-to-top").fadeIn():s(".scroll-to-top").fadeOut()}),s(document).on("click","a.scroll-to-top",function(e){var o=s(this);s("html, body").stop().animate({scrollTop:s(o.attr("href")).offset().top},1e3,"easeInOutExpo"),e.preventDefault()})}(jQuery);

var app = new function() {

	var self = this;
	self.members = [];
	self.dobMembers = [];
	self.domMembers = [];
	self.selectedPhones = [];
	self.selectedEmails = [];
	self.communication = {};
	self.cust = [];
	// self.loadMembers = function() {
	// 	$.ajax({
	// 		url: 'php/members.php',
	// 		method: 'POST',
	// 		dataType: 'JSON',
	// 		success: function(data) {
	// 			self.members = data;
	// 		}
	// 	});
	// };

	self.getRecord = function(familyID) {
		return self.members.find(member => member.cust_name === familyID);
	};

	self.getRecordIndex = function(familyID) {
		for (var i = 0; i < self.members.length; i++) {
			if (self.members[i].family_no === familyID) {
				return i;
			}
		}
		return -1;
	};

// ++++++++++++++++++++++++++++++++++++++++
// reload
// ++++++++++++++++++++++++++++++++++++++++

	self.reloadMemberData = function() {
		$('#memberTable').DataTable().clear().draw();
		// self.loadMemberData();
		self.get_cust();

	};


	self.reloadcatData = function() {
		$('#catTable').DataTable().clear().draw();
		// self.loadMemberData();
		self.get_cat();

	};



	self.reloadrepData = function() {
		$('#repTable').DataTable().clear().draw();
		// self.loadMemberData();
		self.get_rep();

	};

	self.reloadaItemData = function() {
		$('#itemTable').DataTable().clear().draw();
		// self.loadMemberData();
		self.get_item();

	};

	self.reloadOrderData = function() {
		$('#OrderTable').DataTable().clear().draw();
		// self.loadMemberData();
		self.get_order();

	};

// ++++++++++++++++++++++++++++++++++++++++
// reload
// ++++++++++++++++++++++++++++++++++++++++





// ++++++++++++++++++++++++++++++++++++++++
// read data
// ++++++++++++++++++++++++++++++++++++++++

	self.get_item = function() {
		var memberTable = $('#itemTable');
		memberTable.DataTable().destroy();
		var container = memberTable.find('tbody');




		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_item'
				
				},
				success : function(data){

								var i=0;

								while(data.rows>i){
								 var tr = $(`<tr data-id="${data[i].item_code}">`);
												tr.append($(`<td> ${data[i].item_name}</td>`));
												tr.append($(`<td> ${data[i].item_price}</td>`));
												

												tr.append($(`<td>${data[i].item_cat} </td>`));
													

												tr.append($(`<td class="float-right member-options">
							                    <i class="far fa-edit fa-2x interactable enable-animation" data-toggle="modal" data-target="#edititemModal" data-mode="edit" onclick="app.onEditNewItemClicked(${data[i].item_code});"></i>
							                    <i class="far fa-trash-alt fa-2x interactable enable-animation"  data-toggle="modal" data-target="#deleteMemberModal"></i>
							                	</td></tr>`));


									 			container.append(tr);
									 			i++;
						 		}
						 		
						 		
						 			memberTable.DataTable({
                            			pageLength: 50,
                            			fixedHeader: true,
                            			dom: 'Bfrtip',
                            			stateSave: true,
                            			buttons: [
                            	            'copy', 
                            	            'csv', 
                            	            'excel', 
                            	            'pdf', 
                            	            'print',
                            	            'colvis'
                            	        ]
                            		});



				}
		
  		  });





		


		$('#newitemModal').on('shown.bs.modal', function (event) {
			var mode = $(event.relatedTarget).attr('data-mode');
			switch(mode) {
				case 'add':
					self.onAddNewItemClicked(event);
					break;
				case 'view':
					self.onViewNewItemClicked(event);
					alert('fgh');
					break;
				case 'edit':
					self.onEditNewItemClicked(event);
					 alert('fgh');

					 

					break;
				default:
					break;
			}




		});




		$('#deleteMemberModal').on('shown.bs.modal', function (event) {
			var item_code = $(event.relatedTarget).closest('tr').attr('data-id');
			// var member = self.getRecord(familyID);
			var label = $('#deleteMemberModalLabel');
			label.text(`Delete the record of()?`);
			label.closest('.modal').find('.btn-primary').attr('onclick', `app.delete_item('${item_code}');`);
		

		});




		
		
		

	};



	self.get_cat = function() {
		var memberTable = $('#catTable');
		memberTable.DataTable().destroy();
		var container = memberTable.find('tbody');




		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_itemcat'
				
				},
				success : function(data){

								var i=0;

								while(data.rows>i){
								 var tr = $(`<tr data-id="${data[i].item_cat_name}">`);
												// tr.append($(`<td> ${data[i].item_name}</td>`));
												
												tr.append($(`<td> ${data[i].item_cat_name} </td>`));
												tr.append($(`<td> ${data[i].item_cat_sort} </td>`));


												tr.append($(`<td class="float-right member-options">
							                    <i class="far fa-edit fa-2x interactable enable-animation" data-toggle="modal" data-target="#editcatitemModal" data-mode="edit"></i>
							                    <i class="far fa-trash-alt fa-2x interactable enable-animation"  data-toggle="modal" data-target="#deleteMemberModal" ></i>
							                	</td></tr>`));


									 			container.append(tr);
									 			i++;
						 		}
						 		
						 		
						 			memberTable.DataTable({
                            			pageLength: 50,
                            			fixedHeader: true,
                            			dom: 'Bfrtip',
                            			stateSave: true,
                            			buttons: [
                            	            'copy', 
                            	            'csv', 
                            	            'excel', 
                            	            'pdf', 
                            	            'print',
                            	            'colvis'
                            	        ]
                            		});



				}
		
  		  });





		

		$('#editcatitemModal').on('shown.bs.modal', function (event) {

			var mode = $(event.relatedTarget).attr('data-mode');
			switch(mode) {
				case 'add':
					self.onAddNewItemClicked(event);
					break;
				case 'view':
					self.onViewNewItemClicked(event);
					
					break;
				case 'edit':
					self.onEditItemCatClicked(event);
					
					

					 

					break;
				default:
					break;
			}




		});




		$('#deleteMemberModal').on('shown.bs.modal', function (event) {
			var item_cat_name = $(event.relatedTarget).closest('tr').attr('data-id');
			// var member = self.getRecord(familyID);
			var label = $('#deleteMemberModalLabel');
			label.text(`Delete the record of()?`);
			label.closest('.modal').find('.btn-primary').attr('onclick', `app.delete_item_cat('${item_cat_name}');`);
		

		});



		
		
		
		

	};


self.get_item_fororder = function() {
var len=0;

		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_item'
				
				},
				success : function(data){

								var i=0;
								$('#ordermodalBody').html('');
    							$('#note').html('');


								while(data.rows>i){
								 var tr = $('#ordermodalBody').append('<div  class="form-row d-md-flex justify-content-md-center" style="margin-right:0px;margin-left:0px;padding-top:24px;">    <div class="col-md-8 col-lg-9 offset-md-1 offset-lg-0" style="width: 366px;">        <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 19px;"><strong  class="items" id='+'item_name'+i+'>'+data[i].item_name+' </strong></p>  <label style="font-size: 11px;" class="text-info"><strong><em>'+data[i].item_cat+'</em></strong></label>  </div>   <div class="col-6 col-md-4 col-lg-4 offset-md-1 offset-lg-0"><input data='+data[i].item_code+' id='+'item_qty'+i+' type="text" class="border-primary shadow-lg form-control" style="margin-left: 0px;font-family: "Archivo Black", sans-serif;text-align: right;" name="Qty" placeholder="Qty" inputmode="numeric" required autocomplete="off" /></div>    <div class="col-6 col-md-4 col-lg-4 offset-md-0"><input id='+'item_price'+i+' type="text" class="border-primary shadow-lg form-control" style="margin-left: 0px;font-family: "Archivo Black", sans-serif;text-align: right;" " placeholder="Price" inputmode="numeric" required /></div></div> <hr style="font-size: 24px;padding: 1px;height: 1px;background-color: #ccd2ff;" />');


									
										$('#item_price'+i).val(data[i].item_price);

									 i++;

						 		}
						 		
						 		$('#ordermodalBody').append(' <div class="input-group">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 1</span> </div><input type="text" id="note1" maxlength="35" class="form-control" aria-label="With textarea"></div> ');
						 		$('#ordermodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 2</span> </div><input maxlength="35" type="text" id="note2" class="form-control" aria-label="With textarea"></div> ');
						 		$('#ordermodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 3</span> </div><input maxlength="35" type="text" id="note3" class="form-control" aria-label="With textarea"></div> ');
						 		$('#ordermodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 4</span> </div><input maxlength="35" type="text" id="note4" class="form-control" aria-label="With textarea"></div> ');
						 		$('#ordermodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 5</span> </div><input maxlength="35" type="text" id="note5" class="form-control" aria-label="With textarea"></div> ');
						 		$('#ordermodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 6</span> </div><input maxlength="35" type="text" id="note6" class="form-control" aria-label="With textarea"></div> ');
						 		$('#ordermodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 7</span> </div><input maxlength="35" type="text" id="note7" class="form-control" aria-label="With textarea"></div> ');
						 		// len=$('.items').length;
						 	}

  		  });

	};




	self.get_rep = function() {
		var memberTable = $('#repTable');
		memberTable.DataTable().destroy();
		var container = memberTable.find('tbody');




		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_rep'
				
				},
				success : function(data){

								var i=0;

								while(data.rows>i){
								 var tr = $(`<tr data-id="${data[i].rep_id}">`);
												tr.append($(`<td> ${data[i].rep_name}</td>`));
												tr.append($(`<td> ${data[i].rep_phone}</td>`));
											
													

												tr.append($(`<td class="float-right member-options">
												<i onclick="app.onEditrepClicked(${data[i].rep_id});" class="far fa-edit fa-2x interactable enable-animation" data-toggle="modal" data-target="#edirepModal" data-mode="edit"></i>

												<i class="far fa-trash-alt fa-2x interactable enable-animation"  data-toggle="modal" data-target="#deleteMemberModal"></i>
							                	</td></tr>`));


									 			container.append(tr);
									 			i++;
						 		}

						 		memberTable.DataTable({
										pageLength: 50,
										fixedHeader: true,
										dom: 'Bfrtip',
										stateSave: true,
										buttons: [
								            'copy', 
								            'csv', 
								            'excel', 
								            'pdf', 
								            'print',
								            'colvis'
								        ]
								});


				}
		
  		  });





		


		$('#newrepModal').on('shown.bs.modal', function (event) {
			var mode = $(event.relatedTarget).attr('data-mode');
			switch(mode) {
				case 'add':
					self.onAddNewRepClicked(event);
					break;
				case 'view':
					self.onViewNewRepClicked(event);
					break;
				case 'edit':
					self.onEditNewRepClicked(event);
					break;
				default:
					break;
			}




		});




		$('#deleteMemberModal').on('shown.bs.modal', function (event) {
			var item_code = $(event.relatedTarget).closest('tr').attr('data-id');
			// var member = self.getRecord(familyID);
			var label = $('#deleteMemberModalLabel');
			label.text(`Delete the record of()?`);
			label.closest('.modal').find('.btn-primary').attr('onclick', `app.delete_rep('${item_code}');`);
		

		});

		
	};


// ++++++++++++++++++++++++++++++++++++++++
// read data
// ++++++++++++++++++++++++++++++++++++++++



	self.loadMemberData = function() {
		var memberTable = $('#memberTable');
		memberTable.DataTable().destroy();
		var container = memberTable.find('tbody');
		// self.members.forEach(function(member, index) {
		// 	self.addMemberRecord(container, member, index);
		// });

		
		

		memberTable.DataTable({
			pageLength: 50,
			fixedHeader: true,
			dom: 'Bfrtip',
			stateSave: true,
			buttons: [
	            'copy', 
	            'csv', 
	            'excel', 
	            'pdf', 
	            'print',
	            'colvis'
	        ]
		});

		$('#memberModal').on('shown.bs.modal', function (event) {
			var mode = $(event.relatedTarget).attr('data-mode');
			switch(mode) {
				case 'add':
					self.onAddMemberClicked(event);
					break;
				case 'view':
					self.onViewMemberClicked(event);
					break;
				case 'edit':
					self.onEditMemberClicked(event);
					break;
				default:
					break;
			}
		});

		// $('#itemModal').on('shown.bs.modal', function (event) {
		// 	var mode = $(event.relatedTarget).attr('data-mode');
		// 	switch(mode) {
		// 		case 'add':
		// 			self.onAdditemClicked(event);
		// 			break;
		// 		case 'view':
		// 			self.onViewMemberClicked(event);
		// 			break;
		// 		case 'edit':
		// 			self.onEditMemberClicked(event);
		// 			break;
		// 		default:
		// 			break;
		// 	}
		// });


		// $('#deleteMemberModal').on('shown.bs.modal', function (event) {
		// 	var familyID = $(event.relatedTarget).closest('tr').attr('data-id');
		// 	var member = self.getRecord(familyID);
		// 	var label = $('#deleteMemberModalLabel');
		// 	label.text(`Delete the record of ${member.name} (${member.family_no})?`);
		// 	label.closest('.modal').find('.btn-primary').attr('onclick', `app.deleteMember('${member.family_no}');`);
		// });

		$('#deleteMemberModal').on('shown.bs.modal', function (event) {
			var cust_id = $(event.relatedTarget).closest('tr').attr('data-id');
			var label = $('#deleteMemberModalLabel');
			label.text(`Delete the record of ()?`);
			label.closest('.modal').find('.btn-primary').attr('onclick');
			// self.delete(cust_id);


		});
	};


	self.loadOrderData = function() {
		var memberTable = $('#OrderTable');
		memberTable.DataTable().destroy();
		var container = memberTable.find('tbody');
		// self.members.forEach(function(member, index) {
		// 	self.addMemberRecord(container, member, index);
		// });

		
		

		memberTable.DataTable({
			pageLength: 50,
			fixedHeader: true,
			dom: 'Bfrtip',
			stateSave: true,
			buttons: [
	            'copy', 
	            'csv', 
	            'excel', 
	            'pdf', 
	            'print',
	            'colvis'
	        ]
		});

		// $('#memberModal').on('shown.bs.modal', function (event) {
		// 	var mode = $(event.relatedTarget).attr('data-mode');
		// 	switch(mode) {
		// 		case 'add':
		// 			self.onAddMemberClicked(event);
		// 			break;
		// 		case 'view':
		// 			self.onViewOrderClicked(event);
		// 			break;
		// 		case 'edit':
		// 			self.onEditMemberClicked(event);
		// 			break;
		// 		default:
		// 			break;
		// 	}
		// });

		// $('#itemModal').on('shown.bs.modal', function (event) {
		// 	var mode = $(event.relatedTarget).attr('data-mode');
		// 	switch(mode) {
		// 		case 'add':
		// 			self.onAdditemClicked(event);
		// 			break;
		// 		case 'view':
		// 			self.onViewMemberClicked(event);
		// 			break;
		// 		case 'edit':
		// 			self.onEditMemberClicked(event);
		// 			break;
		// 		default:
		// 			break;
		// 	}
		// });


		// $('#deleteMemberModal').on('shown.bs.modal', function (event) {
		// 	var familyID = $(event.relatedTarget).closest('tr').attr('data-id');
		// 	var member = self.getRecord(familyID);
		// 	var label = $('#deleteMemberModalLabel');
		// 	label.text(`Delete the record of ${member.name} (${member.family_no})?`);
		// 	label.closest('.modal').find('.btn-primary').attr('onclick', `app.deleteMember('${member.family_no}');`);
		// });




		$('#deleteMemberModal').on('shown.bs.modal', function (event) {
			var familyID = $(event.relatedTarget).closest('tr').attr('data-id');
			
		});
	};



// ############################################################################################
// add new custamers

	// self.addMemberRecord = function(container, member, index) {
	// 	var tr = $(`<tr data-id="${member.family_no}">`);
	// 	(member.family_no) ? tr.append($(`<td>${member.family_no}</td>`)) : tr.append($(`<td></td>`));
	// 	(member.name) ? tr.append($(`<td>${member.name}</td>`)) : tr.append($(`<td></td>`));
	// 	(member.spouse_name) ? tr.append($(`<td>${member.spouse_name}</td>`)) : tr.append($(`<td></td>`));
	// 	(member.address) ? tr.append($(`<td>${member.address}</td>`)) : tr.append($(`<td></td>`));
	// 	(member.mobile_no) ? tr.append($(`<td><a href="tel:${member.mobile_no}">${member.mobile_no}</a></td>`)) : tr.append($(`<td></td>`));
	// 	(member.phone_no) ? tr.append($(`<td><a href="tel:${member.phone_no}">${member.phone_no}</a></td>`)) : tr.append($(`<td></td>`));
	// 	(member.email) ? tr.append($(`<td><a href="mailto:${member.email}">${member.email}</a></td>`)) : tr.append($(`<td></td>`));
	// 	(member.dob) ? tr.append($(`<td>${self.dateFormat(member.dob, 'YYYY-MM-DD', 'DD-MM-YYYY', '-')}</td>`)) : tr.append($(`<td></td>`));
	// 	(member.dom) ? tr.append($(`<td>${self.dateFormat(member.dom, 'YYYY-MM-DD', 'DD-MM-YYYY', '-')}</td>`)) : tr.append($(`<td></td>`));

	// 	tr.append($(`<td class="float-right member-options">
	//                     <i class="fas fa-eye interactable enable-animation" data-toggle="modal" data-target="#memberModal" data-mode="view"></i>
	//                     <i class="far fa-edit interactable enable-animation" data-toggle="modal" data-target="#memberModal" data-mode="edit"></i>
	//                     <i class="far fa-trash-alt interactable enable-animation" data-toggle="modal" data-target="#deleteMemberModal"></i>
	//                 </td>`));
	// 	container.append(tr);
	// };


	self.addMemberRecord = function(container, member, index) {
		var tr = $(`<tr data-id="${member.family_no}">`);
		(member.family_no) ? tr.append($(`<td>${member.family_no}</td>`)) : tr.append($(`<td></td>`));
		(member.name) ? tr.append($(`<td>${member.name}</td>`)) : tr.append($(`<td></td>`));
		(member.spouse_name) ? tr.append($(`<td>${member.spouse_name}</td>`)) : tr.append($(`<td></td>`));
		(member.address) ? tr.append($(`<td>${member.address}</td>`)) : tr.append($(`<td></td>`));
		(member.mobile_no) ? tr.append($(`<td><a href="tel:${member.mobile_no}">${member.mobile_no}</a></td>`)) : tr.append($(`<td></td>`));
		(member.phone_no) ? tr.append($(`<td><a href="tel:${member.phone_no}">${member.phone_no}</a></td>`)) : tr.append($(`<td></td>`));
		(member.email) ? tr.append($(`<td><a href="mailto:${member.email}">${member.email}</a></td>`)) : tr.append($(`<td></td>`));
		(member.dob) ? tr.append($(`<td>${self.dateFormat(member.dob, 'YYYY-MM-DD', 'DD-MM-YYYY', '-')}</td>`)) : tr.append($(`<td></td>`));
		(member.dom) ? tr.append($(`<td>${self.dateFormat(member.dom, 'YYYY-MM-DD', 'DD-MM-YYYY', '-')}</td>`)) : tr.append($(`<td></td>`));

		tr.append($(`<td class="float-right member-options">
	                    <i class="fas fa-eye interactable enable-animation" data-toggle="modal" data-target="#memberModal" data-mode="view"></i>
	                    <i class="far fa-edit interactable enable-animation" data-toggle="modal" data-target="#memberModal" data-mode="edit"></i>
	                    <i class="far fa-trash-alt interactable enable-animation" data-toggle="modal" data-target="#deleteMemberModal"></i>
	                </td>`));
		container.append(tr);
	};

	self.fillData = function(event, modalTitle, readOnly) {
		var targetElement = $(event.relatedTarget);
		var tr = targetElement.closest('tr');
		var member = app.getRecord(tr.attr('data-id'));

		$('#memberModalLabel').text(`${modalTitle} '${member.name}':`);
		$('#modalBody').html($('#memberForm').html());

		for (var key in member) {
			if (member.hasOwnProperty(key)) {
				var formEl = $(`#modalBody form input[name=${key}], #modalBody form textarea[name=${key}], #modalBody form select[name=${key}]`);
				if (formEl[0]) {
					if (formEl.attr('type') === 'checkbox') {
						member[key] && formEl.prop('checked', true);
					} else {
						member[key] && formEl.val(member[key]);
					}
				}
				if (formEl[0] && readOnly) {
					if (formEl.attr('type') === 'checkbox' || formEl[0].nodeName.toLowerCase() === 'select') {
						formEl.prop('disabled', 'disabled');
					} else {
						formEl.prop('readonly', 'readonly');
					}
				}				
			}
		}
		if (!readOnly) {
			$('#modalBody #btnUpdate').show();
		}
		$('#modalBody #qrCode').qrcode({ width: 80, height: 80, text: member.family_no });
	};

	self.onAddMemberClicked = function(event) {
		$('#memberModalLabel').text(`Add Customer`);
		$('#modalBody').html($('#memberForm').html());
		$('#modalBody #btnAdd').show();
		 self.get_rep_name();

	};

	

	self.onAddNewItemClicked = function(event) {
		$('#newitemModalLabel').text(`Add Item`);
		$('#newitemmodalBody').html($('#newitemForm').html());
		$('#newitemmodalBody #btnAdditem').show();


			$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_itemcat'
				
				},
				success : function(data){
					// var selecttoorder = $('#newitem_cat');
					$('#newitem_cat').html("<option value='0'></option>")
					var i=0;
					
					while(data.rows>i){
						 var op = $(`<option style="font-family: "Archivo Black", sans-serif;opacity: 0.79;" value="${data[i].item_cat_name}">${data[i].item_cat_name}</option>`);
					 
			 									
						 			// selecttoorder.append(op);
						 			$('#newitem_cat').append(op);

						 			i++;

						 				 			
						 }

				}
				
			    });



	};


	self.onEditNewItemClicked = function(id) {
		// var targetElement = $(event.relatedTarget);
		// var tr = targetElement.closest('tr');
		 var item_id = id;

		$.ajax({
			url: 'php/members.php',
			method: 'POST',
			dataType: 'json',
			data: {
				action: 'get_itemcat'
			
			},
			success : function(data){
				// var selecttoorder = $('#newitem_cat');
				$('#edititem_cat').html("<option value='0'></option>")
				var i=0;
				
				while(data.rows>i){
					 var op = $(`<option style="font-family: "Archivo Black", sans-serif;opacity: 0.79;" value="${data[i].item_cat_name}">${data[i].item_cat_name}</option>`);
				 
											 
								 // selecttoorder.append(op);
								 $('#edititem_cat').append(op);

								 i++;

												  
					 }

			}
			
			});


			$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_item_update',
					item_id: item_id
				
				},
				success : function(data){

					
					$('#itemid').text(data['item_id']);
					$('#edititem_name').val(data['item_name']);
					$('#edititem_price').val(data['item_price']);

					

				}
				
				
		      });

		

	};



	self.onEditrepClicked = function(id) {
		// var targetElement = $(event.relatedTarget);
		// var tr = targetElement.closest('tr');
		 var rep_id = id;

			$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_rep_update',
					rep_id: rep_id
				
				},
				success : function(data){

					
					$('#editrep_name').val(data['rep_name']);
					$('#editrep_phone').val(data['rep_phone']);
					$('#editrep_id').val(rep_id);
					$('#old_rep').text(rep_id);
					

				}
				
				
		      });

		

	};

	self.onEditItemCatClicked = function(event) {
	
		var targetElement = $(event.relatedTarget);
		var tr = targetElement.closest('tr');
		var cat = tr.attr('data-id');

	
		 
	
		
		 var item_cat = $('#iteedititem_name_catmcat').val(cat);
 		  $('#edititemcatsort').val('');

		 $('#old_cat').text(cat);
		 
		 


   
		

	};





	self.onAddNewRepClicked = function(event) {
		$('#newrepModalLabel').text(`Add Rep`);
		$('#newrepmodalBody').html($('#newrepForm').html());
		$('#newrepmodalBody #btnAddrep').show();
	};

	self.onAdditemClicked = function(event) {


		self.get_session();

		// $('#repid').text('');
		$('#orderModalLabel').text(`Add New Odrer`);
		// $('#ordermodalBody').html($('#itemForm').html());


		self.get_item_fororder();
		
		$('#btnUpdateorder').hide();
		$('#order_idfroupdate').hide();
		$('#order_custfroupdate').hide();
		$('#orderpriviwemodalBody').hide();
		$('#orderpriviwemodalBody').hide();
		$('#btnAddorder').hide();



		$('#ordermodalBody').show();
		$('#newitemcloseModal').show();
		// $('#btnAddorder').show();
		$('#btnOrderPreview').show();

		 
		 $("#selectname").select2({
		      
		  });
		


		 self.get_cust_nameid();


		// self.test();
		 // $(document).ready(function () {
	      // $('select').selectize({
	      //     sortField: 'text'
	      // });
	  // });


	};

	self.onViewOrderClicked = function(event) {

		
		var targetElement = $(event.relatedTarget);

		var tr = targetElement.closest('tr');
		var order_id = tr.attr('data-id');
		console.log(order_id);
		alert();
		$('#order_name').text('exmapl name');
		 $('#ordermodalBody').html();
	
	

	
		$('.modal-backdrop').remove();
		

	};





	self.onViewMemberClicked = function(event) {
		self.fillData(event, 'Viewing the record of ', true);
	};

	self.onEditMemberClicked = function(event) {
		// self.fillData(event, 'Edit the record of ');


		var targetElement = $(event.relatedTarget);
		var tr = targetElement.closest('tr');
		var cust_id = tr.attr('data-id');

		$('#memberModalLabel').text(`update Customer  ` );
		$('#modalBody').html($('#memberForm').html());
		$('#modalBody #btnUpdate').show();
		self.get_cust_update(cust_id);
		self.get_rep_name();

	 // $('#modalBody #cust_id').attr('readonly', 'readonly');


	 	// console.log(data);
	};

	self.onEditOrderClicked = function(event) {
		// self.fillData(event, 'Edit the record of ');

		
		var targetElement = $(event.relatedTarget);
		var tr = targetElement.closest('tr');
		var order_id = tr.attr('data-id');

		$('#orderModalLabel').text(`Order update` );
		// $('#ordermodalBody').html($('#itemForm').html());

		
		$('#orderpriviwemodalBody').hide();

		$('#btnAddorder').hide();
		$('#order_idfroupdate').show();
		$('#order_custfroupdate').show();


		$('#ordermodalBody').show();
		$('#btnUpdateorder').show();
		
		$('#selectname').hide();

		

		self.get_order_update(order_id);
		// self.get_order_update(order_id);

	 // $('#modalBody #cust_id').attr('readonly', 'readonly');


	 	// console.log(data);
	};  

	self.addMember = function(element) {
		var member = self.constructMember(element);
		if(!self.getRecord(member.cust_name)) {
			$('#preloader').addClass('active');
			

			self.addcust();
			//self.members.push(member);
			self.notify('New member added successfully !');
			$('#closeModal').click();
			//self.persistMember('create', member);
			//self.reloadMemberData();
			

			$('#preloader').removeClass('active');
		} else {
			self.notify('Family No is already present !');
		}

		self.reloadMemberData();

	};


self.additem = function(element) {
			

		$('#preloader').addClass('active');
			
		var newitem_name =$('#newitem_name').val();
		var newitem_price =$('#newitem_price').val();
		var newitem_cat =$('#newitem_cat').val();



	$.ajax({
			url: 'php/members.php',
			method: 'POST',
			dataType: 'json',
			data: {
				action: 'insert_item',
				newitem_name: newitem_name,
				newitem_price: newitem_price,
				newitem_cat: newitem_cat

			
			},
			success : function(){
				
			}
				
				
		});


			self.notify('New Item added successfully !');
			//self.persistMember('create', member);
			//self.reloadMemberData();
			

			$('#preloader').removeClass('active');
	

	$('#newitemcloseModal').click();
	self.reloadaItemData();



	};





	self.add_itemcat = function(element) {
			

		$('#preloader').addClass('active');
			
		var item_cat_name =$('#itemcat').val();
	    var item_cat_sort =$('#itemcatsort').val();



	$.ajax({
			url: 'php/members.php',
			method: 'POST',
			dataType: 'json',
			data: {
				action: 'put_itemcat',
				item_cat_name: item_cat_name,				
				item_cat_sort: item_cat_sort				

			
			},
			success : function(){
				
			}
				
				
		});


			self.notify('New Item added successfully !');
			//self.persistMember('create', member);
			//self.reloadMemberData();
			

			$('#preloader').removeClass('active');
	

	$('#newitemcloseModal').click();
	self.reloadcatData();
	$('#itemcat').val('');
	
	self.reloadcatData();


	};


	self.addorder = function(element) {


		// var member = self.constructMember(element);
		//if(!self.getRecord(member.ordercust_name)) {
			$('#preloader').addClass('active');
			
			 self.add_order();
			// alert($('.items').length);

			self.notify('New order added successfully !');
			 $('#closeModalorder').click();
			// self.persistorder('create', member);
			//self.reloadMemberData();
			$('#preloader').removeClass('active');
		// } else {
		// 	self.notify('Family No is already present !');
		// }
		$('#ordermodalBody').hide();
		// $('#orderpriviwemodalBody').html('sadasd');

	};

	



	self.updateMember = function(element) {
		$('#preloader').addClass('active');
		var member = self.constructMember(element);
		self.members[self.getRecordIndex(member.family_no)] = member;
		self.notify('Member information updated !');
		self.persistMember('update', member);
		self.reloadMemberData();
		$('#preloader').removeClass('active');
	};

	self.constructMember = function(element) {
		var form = $(element).closest('form');
		var formData = form.serializeArray();
		var member = {};
		formData.forEach(function(item, index) {
			member[item.name] = item.value ? item.value : null;
		});
		// member.conformation = form.find('#conformation')[0].checked;
		// member.baptism = form.find('#baptism')[0].checked;
		return member;
	};

	self.deleteMember = function(familyID) {
		$('#memberTable').DataTable().row($(`tr[data-id=${familyID}]`)).remove().draw();
		var member = self.members.splice(self.getRecordIndex(familyID), 1)[0];
		self.persistMember('delete', member);
	};

	self.print = function() {
        window.print();
	};

	self.handleNavigation = function() {
		$('#preloader').addClass('active');
		$('.sidebar .nav-item.active').removeClass('active');
		var hash = window.location.hash.split('#')[1];
		$(`.sidebar .nav-link[href="#${hash}"]`).closest('.nav-item').addClass('active');
		var resultSection = $(`#${hash}-section`);
		$('#pageResult').html(resultSection.html());
		setTimeout(function() {
			var method = resultSection.attr('data-onload').split('.');
			window[method[0]][method[1]]();
			$('#preloader').removeClass('active');
		}, 1000);
		
	};

	self.loadDashboard = function() {
		if (self.members.length > 0) {
			self.filterBirthdaysAndAnniversaries();
			$('#totalMembers').text(self.members.length);
			$('#today').text(self.getToday());
		} else {
			setTimeout(self.loadDashboard, 100);
		}
	};

	self.filterBirthdaysAndAnniversaries = function() {
		self.dobMembers = [];
		self.domMembers = [];
		self.members.forEach(function(member) {
			if (member.dob && self.isToday(member.dob)) {
				self.dobMembers.push(member);
			}
			if (member.dom && self.isToday(member.dom)) {
				self.domMembers.push(member);
			}
		});
		self.loadTable($('#dobCont'), $('#dobMembers'), self.dobMembers, 'dob', 'Age');
		self.loadTable($('#domCont'), $('#domMembers'), self.domMembers, 'dom', 'Years');
	};

	self.isToday = function(dateString) {
		var dateArray = dateString.split('-');
		var day = parseInt(dateArray[2]);
		var month = parseInt(dateArray[1]);
		var todayDate = new Date();
		return day === todayDate.getDate() && month === todayDate.getMonth() + 1;
	};

	self.getToday = function() {
		var date = new Date();
		var month = (date.getMonth() + 1);
		month = month < 10 ? "0" + month : month;
		return date.getDate() + "-" + month + "-" + date.getFullYear();
	};

	self.loadTable = function(container, label, data, field, tableHeader, options) {
		var table = container.find('table tbody');
		data.forEach(function(member) {
			var date = self.dateFormat(member[field], 'YYYY-MM-DD', 'DD-MM-YYYY', '-');
			var age = (new Date()).getFullYear() - parseInt(member[field].split('-')[0]);
			var tr = $(`<tr><td>${member.family_no}</td><td>${member.name}</td><td>${date}</td><td>${age}</td></tr>`);
			table.append(tr);
		});
		label && label.text(data.length);
		container.find('th[data-type=header]').text(tableHeader);
		container.find('table').DataTable(options);
	};

	var printOptions = {
		pageLength: 50,
		scrollX: true,
		dom: 'Bfrtip',
		buttons: [
            'copy', 
            'csv', 
            'excel', 
            'pdf', 
            'print'
        ]
	};

	self.loadBirthdays = function() {
		var birthdays = self.members.filter(member => member.dob);
		self.loadTable($('#pageResult .card-body'), null, birthdays, 'dob', 'Age', printOptions);
	};

	self.loadAnniversaries = function() {
		var anniversaries = self.members.filter(member => member.dom);
		self.loadTable($('#pageResult .card-body'),null, anniversaries, 'dom', 'Years', printOptions);
	};

	self.loadContacts = function() {
		var table = $('#pageResult .card-body').find('table');
		var tbody = table.find('tbody');
		table.DataTable().destroy();

		var contacts = self.members.filter(member => member.phone_no || member.mobile_no || member.email);
		contacts.forEach(function(contact, index) {
			tbody.append(`
				<tr>
					<td>${contact.family_no}</td>
					<td>${contact.name}</td>
					<td>${contact.phone_no ? contact.phone_no : ''}</td>
					<td>${contact.mobile_no ? contact.mobile_no : ''}</td>
					<td>${contact.email ? contact.email : ''}</td>
				</tr>
			`);
		});
		table.DataTable({
			pageLength: 50, fixedHeader: true, dom: 'Bfrtip', stateSave: true,
			buttons: ['copy', 'csv', 'excel', 'pdf', 'print', 'colvis']
		});
	};

	self.dateFormat = function(value, inputFormat, outputFormat, outputSplitter) {
		let strOutputFormat = outputFormat.split(outputSplitter).map(i => i.toUpperCase());
		if (strOutputFormat.length != 3) {
			strOutputFormat = outputFormat.split('-');
			outputSplitter = '-';
		}

		if (strOutputFormat.length != 3) throw new Error('wrong output format splitter :(');

		let date = null;

		if (value instanceof Date) {
			date = {
				["YYYY"]: value.getUTCFullYear(),
				["MM"]: value.getMonth() + 1,
				["DD"]: value.getDate()
			}
		}

		if (typeof value == 'string') {
			let inputSplitter = "/";

			var strInputFormat = inputFormat.split(inputSplitter).map(i => i.toUpperCase());
			if (strInputFormat.length != 3) {
				strInputFormat = inputFormat.split('-');
				inputSplitter = '-';
			}

			if (strInputFormat.length != 3) throw new Error('wrong input format splitter :(');

			let dateElements = value.split(inputSplitter);
			if (dateElements.length != 3) throw new Error('wrong value :(');

			date = {
				[strInputFormat[0]]: dateElements[0],
				[strInputFormat[1]]: dateElements[1],
				[strInputFormat[2]]: dateElements[2],
			}
		}

		if (!date) throw new Error('unsupported value type:(');

		let result = date[strOutputFormat[0]] + outputSplitter + date[strOutputFormat[1]] + outputSplitter + date[strOutputFormat[2]];
		return result;
	}

	self.loadSmsSection = function() {
		$('#birthdayMsgConfig').click();
		self.constructContacts('mobile_no');
	};

	self.fillWithData = function(mode, type) {
		var container = $('#pageResult #communicationBody');
		container.attr('data-mode', mode).attr('data-type', type);
		var settings = self.communication[mode][type];
		for (var key in settings) {
			if (settings.hasOwnProperty(key)) {
				if (key === 'autoNotify') {
					container.find(`#${key}`)[0].checked = settings[key];
				} else {
					container.find(`#${key}`).val(settings[key]);
				}
			}
		}
		if (mode === 'email') {
			container.find('#subject').closest('.row').show();
		}
	};

	self.fillSettings = function(mode) {
		var container = $('#pageResult #communicationBody');
		container.attr('data-mode', mode);
		var settings = self.communication[mode].settings;
		for (var key in settings) {
			if (settings.hasOwnProperty(key)) {
				container.find(`#${key}`).val(settings[key]);
			}
		}
	};

	self.updateConfig = function() {
		var container = $('#pageResult #communicationBody');
		var mode = container.attr('data-mode');
		var type = container.attr('data-type');

		self.communication[mode][type].autoNotify = container.find('#autoNotify')[0].checked;
		self.communication[mode][type].preferredTime = container.find('#preferredTime').val();
		self.communication[mode][type].preferredSession = container.find('#preferredSession').val();
		self.communication[mode][type].messageTemplate = container.find('#messageTemplate').val();
		if (mode === 'email') {
			self.communication[mode][type].subject = container.find('#subject').val();
		}
		self.persistCommunicationConfig();
		alert('Settings updated !');
		$('#enableEditing').click();
	};

	self.updateSettings = function() {
		var container = $('#pageResult #communicationBody');
		var mode = container.attr('data-mode');

		switch (mode) {
			case 'email':
				self.communication.email.settings.host = container.find('#host').val();
				self.communication.email.settings.port = container.find('#port').val();
				self.communication.email.settings.username = container.find('#username').val();
				self.communication.email.settings.password = container.find('#password').val();
				break;
			case 'sms':
				self.communication.sms.settings.apiKey = container.find('#apiKey').val();
				self.communication.sms.settings.language = container.find('#language').val();
				break;
			default:
				break;
		} 
		self.persistCommunicationConfig();
		alert('Settings updated !');
		$('#enableEditing').click();
	};

	self.loadEmailSection = function() {
		$('#birthdayMailConfig').click();
		self.constructContacts('email');
	};

	self.constructContacts = function(field) {
		var table = $('#contactsModal .modal-body').find('table');
		table.attr('data-field', field);
		var tbody = table.find('tbody');
		if (tbody.html().trim() !== '') {
			table.DataTable().clear().draw();
		}
		table.DataTable().destroy();

		var contacts = self.members.filter(member => member[field]);
		contacts.forEach(function(contact, index) {
			tbody.append(`
				<tr>
					<td><input type="checkbox" onchange="app.handleContact('${field}', '${contact[field]}');" /></td>
					<td>${contact.family_no}</td>
					<td>${contact.name}</td>
				</tr>
			`);
		});
		table.DataTable({
			pageLength: 10,
			fixedHeader: true,
		});
	};

	self.handleContact = function(field, value) {
		if (value || value != 'null') {
			switch (field) {
				case 'mobile_no':
					if (self.selectedPhones.indexOf(value) === -1) {
						self.selectedPhones.push(value);
					}
					break;
				case 'email':
					if (self.selectedEmails.indexOf(value) === -1) {
						self.selectedEmails.push(value);
					}
					break;
				default:
					break;
			}
		}
	};

	self.getContactType = function() {
		return $('#contactsModal .modal-body').find('table').attr('data-field');
	};

	self.addAllContacts = function(element) {
		var field = self.getContactType();
		switch (field) {
			case 'mobile_no':
				$('#contacts').val(app.members.filter(member => member.mobile_no).map(data => data.mobile_no).join(','));
				break;
			case 'email':
				$('#contacts').val(app.members.filter(member => member.email).map(data => data.email).join(','));
				break;
			default:
				break;
		}
	};

	self.addSelectedContacts = function(element) {
		var field = self.getContactType();
		$(element).closest('')
		switch (field) {
			case 'mobile_no':
				$('#contacts').val(self.selectedPhones.join(','));
				break;
			case 'email':
				$('#contacts').val(self.selectedEmails.join(','));
				break;
			default:
				break;
		}
	};

	self.handleEditForm = function(checkbox) {
		var form = $(checkbox).closest('form');
		if (checkbox.checked) {
			form.find('select').removeAttr('disabled');
			form.find('#autoNotify').removeAttr('disabled');
			form.find('textarea, input[type=text], input[type=password], input[type=number]').removeAttr('readonly');
			form.find('.modal-footer').show();
		} else {
			form.find('select').prop('disabled', 'disabled');
			form.find('#autoNotify').prop('disabled', 'disabled');
			form.find('textarea, input[type=text], input[type=password], input[type=number]').prop('readonly', 'readonly');
			form.find('.modal-footer').hide();
		}
	};

	self.handleTab = function(element, mode, type) {
		var ul = self.handleActiveTab(element);
		var cardBody = ul.closest('.card').find('.card-body');
		cardBody.html($('#communicationForm').html());
		self.fillWithData(mode, type);
	};

	self.handleActiveTab = function(element) {
		var ul = $(element).closest('ul');
		ul.find('.nav-link.active').removeClass('active');
		$(element).addClass('active');
		return ul;
	};

	self.showSettings = function(element, mode) {
		var ul = self.handleActiveTab(element);
		var cardBody = ul.closest('.card').find('.card-body');
		cardBody.html($(`#${mode}-settings`).html());
		self.fillSettings(mode);
	};

	self.clearForm = function(element) {
		$(element).closest('form').find('textarea').val('');
	};

	self.sendSMS = function() {
		var contacts = $('#contacts').val();
		var message = $('#message').val();
		if (contacts !== '' && message !== '') {
			var numbers = [];
			contacts = contacts.split(',');
			contacts.forEach(function(contact) {
				var member = self.members.find(member => member.mobile_no == contact);
				numbers.push({name: member ? member.name : '', years: '', date: '', number: contact});
			});
			self.dispatchSms(JSON.stringify(numbers), message);
			alert('SMS sent successfully !!')
		} else {
			alert('Message / Contacts should not be empty !!!');
		}
	};

	self.dispatchSms = function(contacts, message) {
		$.ajax({
			url: 'php/sms.php',
			method: 'POST',
			data: {
				message: message,
				contacts: contacts
			}
		});
	};

	self.sendEmail = function() {
		var contacts = $('#contacts').val();
		var subject = $('#subject').val();
		var message = $('#message').val();
		if (contacts !== '' && message !== '' && subject !== '') {
			var mails = [];
			contacts = contacts.split(',');
			contacts.forEach(function(contact) {
				var member = self.members.find(member => member.email == contact);
				mails.push({name: member ? member.name : '', years: '', date: '', email: contact});
			});
			self.dispatchEmail(subject, message, JSON.stringify(mails));
			alert('Mail sent successfully !!')
		} else {
			alert('Subject / Message / Contacts should not be empty !!!');
		}
	};

	self.dispatchEmail = function(subject, message, contacts) {
		$.ajax({
			url: 'php/email.php',
			method: 'POST',
			data: {
				subject: subject,
				message: message,
				contacts: contacts
			}
		});
	};

	self.persistCommunicationConfig = function() {
		$.ajax({
			url: 'php/write_file.php',
			method: 'POST',
			data: {
				file_name: 'communication_config.json',
				data: JSON.stringify(self.communication)
			}
		});
	};

	self.persistMember = function(action, member) {
		// alert(member.cust_name
		// +'  '+member.cust_address1
		// +'  '+member.cust_address2
		// +'  '+member.cust_area
		// +'  '+member.cust_city
		// +'  '+member.cust_pincode
		// +'  '+member.cust_phone
		// +'  '+member.cust_gstNo
		// );
		$.ajax({
			url: 'php/members.php',
			method: 'POST',
			data: {
				action: action,
				id: member.cust_name,
				json: JSON.stringify(member)
			}
		});
	};

	self.persistorder = function(action, member) {
		member.cust_id=111;
		//alert(member.itemprice1+member.itemqut1);
		$.ajax({
			
			url: 'php/putorder.php',
			method: 'POST',
			data: {
				action: action,
				id: member.cust_id,
				json: JSON.stringify(member)
			}
			
		});
				

	};



	self.notify = function(message) {
		var notification = document.getElementById('notification');
		notification.textContent = message;
		notification.classList.remove('fade-out');
		setTimeout(function() {
			notification.classList.add('fade-out');
		}, 3000);
	};



	self.addcust = function() {

		var cust_name =$('#cust_name').val();
		var cust_area =$('#cust_area').val();
		var selectrep =$('#selectrep').val();
		// var cust_area =$('#cust_area').val();
		// var cust_city =$('#cust_city').val();
		// var cust_pincode =$('#cust_pincode').val();
		// var cust_phone =$('#cust_phone').val();
		// var cust_gstNo =$('#cust_gstNo').val();
		// alert(cust_name);
		// alert(cust_address1);
		// alert(cust_address2);
		// alert(cust_area);
		// alert(cust_city);
		// alert(cust_pincode);
		// alert(cust_phone);
		// 		alert(cust_gstNo);



	$.ajax({
			url: 'php/members.php',
			method: 'POST',
			dataType: 'json',
			data: {
				action: 'insert_cust',
				cust_name: cust_name,
				cust_area: cust_area,
				rep_name: selectrep,
				// cust_area: cust_area,
				// cust_city: cust_city,
				// cust_pincode: cust_pincode,
				// cust_phone: cust_phone,
				// cust_gstNo: cust_gstNo

			},
			success : function(){
				
				// self.notify('successfully deleted');
							}
				
			
		      });


	};


	self.addrep = function() {

		var rep_name =$('#rep_name').val();
		var rep_phone =$('#rep_phone').val();
		var rep_id =$('#rep_id').val();

	
	$('#preloader').addClass('active');

	$.ajax({
			url: 'php/members.php',
			method: 'POST',
			dataType: 'json',
			data: {
				action: 'insert_rep',
				rep_name: rep_name,
				rep_phone: rep_phone,
				rep_id: rep_id
			

			},
			success : function(){
				
							}
				
			
		      });
	$('#preloader').removeClass('active');
	$('#closeModal').click();

	self.reloadrepData()


	};



	self.updateCust = function() {
		
		var cust_id =$('#cust_id').text();
		var cust_area =$('#cust_area').val();
		var cust_name =$('#cust_name').val();
		var selectrep =$('#selectrep').val();
		// var cust_area =$('#cust_area').val();
		// var cust_city =$('#cust_city').val();
		// var cust_pincode =$('#cust_pincode').val();
		// var cust_phone =$('#cust_phone').val();
		// var cust_gstNo =$('#cust_gstNo').val();
		// alert(cust_name);
		// alert(cust_address1);
		// alert(cust_address2);
		// alert(cust_area);
		// alert(cust_city);
		// alert(cust_pincode);
		// alert(cust_phone);
		// 		alert(cust_gstNo);



	$.ajax({
			url: 'php/members.php',
			method: 'POST',
			dataType: 'json',
			data: {
				action: 'update_cust',
				cust_id: cust_id,
				cust_name: cust_name,
				cust_area: cust_area,
				rep_name: selectrep
			

			},
			success : function(){
				
				
							}
				
			
		      });
	self.reloadMemberData();

	};

	self.update_itemcat = function() {
		
		var item_cat =$('#iteedititem_name_catmcat').val();
		var edititemcatsort =$('#edititemcatsort').val();

		var old_cat =$('#old_cat').text();
		// console.log(item_cat);
		// console.log(old_cat);
		


			$.ajax({
						url: 'php/members.php',
						method: 'POST',
						dataType: 'json',
						data: {
							action: 'update_cat',
							item_cat: item_cat,
							edititemcatsort: edititemcatsort,
							old_cat: old_cat
			
							
			
						},
						success : function(){
							
							
										}
							
						
					      });


	self.reloadcatData();

	};

	self.update_rep = function() {
		
		var rep_id =$('#editrep_id').val();
		var rep_name =$('#editrep_name').val();
		var rep_phone =$('#editrep_phone').val();
		var old_rep =$('#old_rep').text();
		// console.log(item_cat);
		// console.log(old_cat);
		


			$.ajax({
						url: 'php/members.php',
						method: 'POST',
						dataType: 'json',
						data: {
							action: 'update_rep',
							rep_id: rep_id,
							rep_name: rep_name,
							rep_phone: rep_phone,
							old_rep: old_rep
			
							
			
						},
						success : function(){
							
							
										}
							
						
					      });


						  self.reloadrepData();

	};



	self.update_item = function() {
		
		var item_id =$('#itemid').text();
		var item_cat =$('#edititem_cat').val();
		var item_name =$('#edititem_name').val();
		var item_price =$('#edititem_price').val();


	$.ajax({
			url: 'php/members.php',
			method: 'POST',
			dataType: 'json',
			data: {
				action: 'update_item',
				item_id: item_id,
				item_cat: item_cat,

				item_name: item_name,
				item_price: item_price
				

			},
			success : function(){
				
				
							}
				
			
		      });
			  self.reloadaItemData();

	};

	// self.update_rep = function() {
		
	// 	var rep_name =$('#rep_name').val();
	// 	var rep_phone =$('#rep_phone').val();
	// 	var rep_id =$('#rep_id').val();
	


	// $.ajax({
	// 		url: 'php/members.php',
	// 		method: 'POST',
	// 		dataType: 'json',
	// 		data: {
	// 			action: 'update_rep',
	// 			item_id: item_id,
	// 			item_cat: item_cat,

	// 			rep_name: rep_name,
	// 			rep_phone: rep_phone,
	// 			rep_id: rep_id

	// 		},
	// 		success : function(){
				
				
	// 						}
				
			
	// 	      });
	// 		  self.reloadarepData();

	// };



	self.get_cust = function() {

         
		$('#memberModal').on('shown.bs.modal', function (event) {
			var mode = $(event.relatedTarget).attr('data-mode');
			switch(mode) {
				case 'add':
					self.onAddMemberClicked(event);
					break;
				case 'view':
					self.onViewClicked(event);
					break;
				case 'edit':
					self.onEditMemberClicked(event);
					break;
				default:
					break;
			}
		});
		
		$('#deleteMemberModal').on('shown.bs.modal', function (event) {
			var cust_id = $(event.relatedTarget).closest('tr').attr('data-id');
			// var member = self.getRecord(familyID);
			var label = $('#deleteMemberModalLabel');
			label.text(`Delete the record of()?`);
			label.closest('.modal').find('.btn-primary').attr('onclick', `app.delete_cust('${cust_id}');`);
		

		});

		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_cust'
				
				},
				success : function(data){
					self.load_cat(data);
				
				}
				
			      });
		
	
		};

		self.load_cat = function(data) {
	
			var memberTable = $('#memberTable');
			memberTable.DataTable().destroy();
			var container = memberTable.find('tbody');
			
			var i=0;
	
			while(data.rows>i){
			 var tr = $(`<tr data-id="${data[i].cust_id}">`);
				 // 			tr.append($(`<td> ${data[i].cust_id}</td>`));
							tr.append($(`<td> ${data[i].cust_name}</td>`));
							tr.append($(`<td> ${data[i].cust_area}</td>`));
							tr.append($(`<td> ${data[i].rep_name}</td>`));
							tr.append($(`</tr>`));
								
	
							tr.append($(`<td class="float-right member-options">
						   
							<i class="far fa-edit interactable enable-animation" data-toggle="modal" data-target="#memberModal" data-mode="edit"></i>
							<i class="far fa-trash-alt interactable enable-animation" data-toggle="modal" data-target="#deleteMemberModal"></i>
							</td></tr>`));
	
	//  <i class="fas fa-eye interactable enable-animation" data-toggle="modal" data-target="#memberModal" data-mode="view"></i>
	
							 container.append(tr);
							 i++;
				 }
	
		memberTable.DataTable({
				pageLength: 50,
				fixedHeader: true,
				dom: 'Bfrtip',
				stateSave: true,
				buttons: [
					'copy', 
					'csv', 
					'excel', 
					'pdf', 
					'print',
					'colvis'
				]
			});
	
	
	
	
	
			
	
		};



	
	



	self.get_cust_nameid = function() {


		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_cust_nameid'
				
				},
				success : function(data){
				
				 	self.load_cust_name(data);

				}
				
			      });
		return false;
		
		};

	self.load_cust_name = function(data) {
		var selecttoorder = $('#selectname');
		$('#selectname').html("<option value='0'></option>")
		var i=0;
		
		while(data.rows>i){
			 var op = $(`<option style="font-family: "Archivo Black", sans-serif;opacity: 0.79;" value="${data[i].cust_id}">${data[i].cust_name}</option>`);
		 
 									
			 			selecttoorder.append(op);
			 			i++;

			 				 			
			 }

	};








	self.get_rep_name = function() {


		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_rep_name'
				
				},
				success : function(data){
				
				 	self.load_rep_name(data);

				}
				
			      });
		return false;
		
		};

	self.load_rep_name = function(data) {
		var selecttoorder = $('#selectrep');
		$('#selectrep').html("<option value='0'></option>")
		var i=0;
		
		while(data.rows>i){
			 var op = $(`<option style="font-family: "Archivo Black", sans-serif;opacity: 0.79;" value="${data[i].rep_name}">${data[i].rep_name}</option>`);
		 
 									
			 			selecttoorder.append(op);
			 			i++;

			 				 			
			 }

	};










	self.load_cust = function(data) {
	
		var memberTable = $('#memberTable');
		memberTable.DataTable().destroy();
		var container = memberTable.find('tbody');
		
		var i=0;

		while(data.rows>i){
		 var tr = $(`<tr data-id="${data[i].cust_id}">`);
 			// 			tr.append($(`<td> ${data[i].cust_id}</td>`));
						tr.append($(`<td> ${data[i].cust_name}</td>`));
				// 		tr.append($(`<td> ${data[i].cust_address1}</td>`));
				// 		tr.append($(`<td> ${data[i].cust_address2}</td>`));
						tr.append($(`<td> ${data[i].cust_area}</td>`));
						tr.append($(`<td> ${data[i].rep_name}</td>`));

				// 		tr.append($(`<td> ${data[i].cust_city}</td>`));
				// 		tr.append($(`<td> ${data[i].cust_pincode}</td>`));
						// tr.append($(`<td> ${data[i].cust_phone}</td>`));
						tr.append($(`</tr>`));
							

						tr.append($(`<td class="float-right member-options">
	                   
	                    <i class="far fa-edit interactable enable-animation" data-toggle="modal" data-target="#memberModal" data-mode="edit"></i>
	                    <i class="far fa-trash-alt interactable enable-animation" data-toggle="modal" data-target="#deleteMemberModal"></i>
	                	</td></tr>`));

//  <i class="fas fa-eye interactable enable-animation" data-toggle="modal" data-target="#memberModal" data-mode="view"></i>

			 			container.append(tr);
			 			i++;
	 		}

	memberTable.DataTable({
			pageLength: 50,
			fixedHeader: true,
			dom: 'Bfrtip',
			stateSave: true,
			buttons: [
	            'copy', 
	            'csv', 
	            'excel', 
	            'pdf', 
	            'print',
	            'colvis'
	        ]
		});





		

	};









self.update_order = function() {
	var count=0;
	var odrer=[];
		var cust_id = '1';
		var order_id = $('#order_idfroupdate').text();
		var cust_name = $('#order_custfroupdate').text();
	
	var count=0;
	var odrer=[];
	var len=$('.items').length;
	var i=0;
	while(i<len){
		var itemqut = $('#item_qty'+i).val();
		var itemprice = $('#item_price'+i).val();
		var itemname = $('#item_name'+i).text();
		var itemcode = $('#item_name'+i).text();


		// var cust_name=$('#selectname').find(':selected').text();
		// var cust_id=$('#selectname').find(':selected').val();
		// console.log(cust_id);
		// console.log(cust_name);
		if( 0<itemqut ){
			odrer[count]={item_name:itemname, item_qty: itemqut, item_price: itemprice, item_code: itemcode};
			count++;
		}

		i++;
	}

// console.log(odrer);
// console.log(order_id);
// console.log(cust_name);


	$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'update_order',
					order: odrer,
					count: count,
					cust_id: cust_id,
					cust_name: cust_name,
					order_id: order_id
				},
				success : function(data){
					
						 

						}
				


	});
	self.reloadOrderData();

};

self.back_preview = function() {
   $('#orderpriviwemodalBody').hide(); 
      $('#backPreview').hide(); 
      $('#btnOrderPreview').show(); 
      $('#ordermodalBody').show(); 

    
}

self.order_preview = function() {
var count=0;
	var odrer=[];
	var len=$('.items').length;
	var i=0;

$('#orderpriviwemodalBody').show();



$('#orderpriviwemodalBody').html('<table class="table">    <thead>        <tr>            <th>ITEM NAME</th>            <th>QTY</th>            <th>PRICE</th>        </tr>    </thead>    <tbody id= "ordered">  </tbody></table>');




	
	while(i<len){
		var itemqut = $('#item_qty'+i).val();
		var itemprice = $('#item_price'+i).val();
		var itemname = $('#item_name'+i).text();
		var itemcode = $('#item_name'+i).text();



		var cust_name=$('#selectname').find(':selected').text();
		var cust_id=$('#selectname').find(':selected').val();
		// console.log(cust_id);
		// console.log(cust_name);
		if( 0<itemqut ){
			odrer[count]={item_name:itemname, item_qty: itemqut, item_price: itemprice, item_code: itemcode};
			count++;


		

		$('#ordered').append('  <tr>            <td>'+itemname+'</td>            <td>'+itemqut+'</td>            <td>'+itemprice+'</td>        </tr>  ');


		}

		i++;
	}
//$('#orderpriviwemodalBody').append(' <div class="input-group">  <div class="input-group-prepend"> <span class="input-group-text">NOTE</span> </div><textarea id="note" class="form-control" aria-label="With textarea"> ');
$('#orderpriviwemodalBody').append(' <div class="input-group">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 1</span> </div><input type="text" value="'+$('#note1').val()+'" id="pnote1" maxlength="35" class="form-control" aria-label="With textarea"></div> ');
$('#orderpriviwemodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 2</span> </div><input type="text" value="'+$('#note2').val()+'" maxlength="35" id="pnote2" class="form-control" aria-label="With textarea"></div> ');
$('#orderpriviwemodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 3</span> </div><input type="text" value="'+$('#note3').val()+'" maxlength="35" id="pnote3" class="form-control" aria-label="With textarea"></div> ');
$('#orderpriviwemodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 4</span> </div><input type="text" value="'+$('#note4').val()+'" maxlength="35" id="pnote4" class="form-control" aria-label="With textarea"></div> ');
$('#orderpriviwemodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 5</span> </div><input type="text" value="'+$('#note5').val()+'" maxlength="35" id="pnote5" class="form-control" aria-label="With textarea"></div> ');
$('#orderpriviwemodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 6</span> </div><input type="text" value="'+$('#note6').val()+'" maxlength="35" id="pnote6" class="form-control" aria-label="With textarea"></div> ');
$('#orderpriviwemodalBody').append(' <div class="input-group" style="margin-top: 8px">  <div class="input-group-prepend"> <span class="input-group-text">NOTE 7</span> </div><input type="text" value="'+$('#note7').val()+'" maxlength="35" id="pnote7" class="form-control" aria-label="With textarea"></div> ');

$('#ordermodalBody').hide();
$('#btnOrderPreview').hide();
$('#btnAddorder').show();
$('#backPreview').show();

}




self.add_order = function() {

	var count=0;
	var odrer=[];
	var len=$('.items').length;
	var i=0;

	var note1 = $('#pnote1').val();
	var note2 = $('#pnote2').val();
	var note3 = $('#pnote3').val();
	var note4 = $('#pnote4').val();
	var note5 = $('#pnote5').val();
	var note6 = $('#pnote6').val();
	var note7 = $('#pnote7').val();
	
	alert(note1);



// $('#orderpriviwemodalBody').html('<table class="table">    <thead>        <tr>            <th>ITEM NAME</th>            <th>QTY</th>            <th>PRICE</th>        </tr>    </thead>    <tbody id= "ordered">  </tbody></table>');




	
	while(i<len){
		var itemqut = $('#item_qty'+i).val();
		var itemprice = $('#item_price'+i).val();
		var itemname = $('#item_name'+i).text();
		var itemcode = $('#item_name'+i).text();



		var cust_name=$('#selectname').find(':selected').text();
		var cust_id=$('#selectname').find(':selected').val();
		// console.log(cust_id);
		// console.log(cust_name);
		if( 0<itemqut ){
			odrer[count]={item_name:itemname, item_qty: itemqut, item_price: itemprice, item_code: itemcode};
			count++;


		

		// $('#ordered').append('  <tr>            <td>'+itemname+'</td>            <td>'+itemqut+'</td>            <td>'+itemprice+'</td>        </tr>  ');


		}

		i++;
	}

// console.log(odrer);
	$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'put_order',
					order: odrer,
					count: count,
					cust_id: cust_id,
					cust_name:cust_name,
					note1:note1,
					note2:note2,
					note3:note3,
					note4:note4,
					note5:note5,
					note6:note6,
					note7:note7,

				},
				success : function(data){
					
						 

						}
				


	});
	self.reloadOrderData();

	};











	self.get_cust_update= function(cust_id) {

		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_cust_update',
					cust_id: cust_id
				
				},
				success : function(data){

					
					$('#cust_id_lab').text('Customer ID :');
					$('#cust_id').text(data['cust_id']);

					$('#cust_name').val(data['cust_name']);
					$('#cust_address1').val(data['cust_address1']);
					$('#cust_address2').val(data['cust_address2']);
					$('#cust_area').val(data['cust_area']);
					$('#cust_city').val(data['cust_city']);
					$('#cust_pincode').val(data['cust_pincode']);
					$('#cust_phone').val(data['cust_phone']);
					$('#cust_gstNo').val(data['cust_gstNo']);


				}
				
				
		      });

	};

	

	self.get_order_update= function(order_id) {

		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_order_update',
					order_id: order_id
				
				},
				success : function(data){

					
					$('#order_idfroupdate').text(data['order_id']);
					$('#order_custfroupdate').text(data['cust_name']);
						


								var i=0;
								$('#ordermodalBody').html('');


								while(data.rows>i){
								 var tr = $('#ordermodalBody').append('<div  class="form-row d-md-flex justify-content-md-center" style="margin-right:0px;margin-left:0px;padding-top:24px;">    <div class="col-md-8 col-lg-9 offset-md-1 offset-lg-0" style="width: 366px;">        <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 19px;"><strong  class="items" id='+'item_name'+i+'>'+data[i].item_name+' </strong></p>    </div>   <div class="col-6 col-md-4 col-lg-4 offset-md-1 offset-lg-0"><input data='+data[i].item_code+' id='+'item_qty'+i+' type="text" class="border-primary shadow-lg form-control" style="margin-left: 0px;font-family: "Archivo Black", sans-serif;text-align: right;" name="Qty" placeholder="Qty" inputmode="numeric" required autocomplete="off" /></div>    <div class="col-6 col-md-4 col-lg-4 offset-md-0"><input id='+'item_price'+i+' type="text" class="border-primary shadow-lg form-control" style="margin-left: 0px;font-family: "Archivo Black", sans-serif;text-align: right;" " placeholder="Price" inputmode="numeric" required /></div></div><hr style="font-size: 24px;padding: 1px;height: 1px;background-color: #ccd2ff;" />');


										$('#item_qty'+i).val(data[i].item_qty);
										$('#item_price'+i).val(data[i].item_price);

									 i++;

				

									}	
							}
				
				
		      });

	};






	self.get_order = function() {



	$('#orderModal').on('shown.bs.modal', function (event) {
			var mode = $(event.relatedTarget).attr('data-mode');
			switch(mode) {
				case 'add':
					self.onAdditemClicked(event);

					break;
				case 'view':
					// window.open("http://localhost/8_3udayam/auto/pdf2.php"); 
					 self.onViewOrderClicked(event);
					break;
				case 'edit':
					self.onEditOrderClicked(event);
					break;
				default:
					break;
			}
		});

	

		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_order'
				
				},
				success : function(data){
					self.load_order (data);
										

				}
				
				
			});


		
	};


	self.load_order = function(data) {
	
	
		var memberTable = $('#OrderTable');
		memberTable.DataTable().destroy();
		var container = memberTable.find('tbody');



	
		var i=0;

		while(data.rows>i){
		 var tr = $(`<tr data-id="${data[i].order_id}">`);
 						tr.append($(`<td>${data[i].sno}</td>`));
				// 		tr.append($(`<td> ${data[i].cust_id}</td>`));
						tr.append($(`<td> ${data[i].cust_name}</td>`));
						
						tr.append($(`<td> ${data[i].order_date}</td>`));
							
                        tr.append($(`<td>`));
						tr.append($(`
	                    <i class="fas fa-eye enable-animation" data-toggle="modal" data-target="#orderviewModal" data-mode="view" onclick="app.order_view('${data[i].order_id}');"  ></i>
	                   	`));
	                	
	                	if(data.user=="Ramesh"){
	                	tr.append($(`
	                    <i class="far fa-edit enable-animation" data-toggle="modal" data-target="#orderModal" data-mode="edit"></i>
	                    <i class="far fa-trash-alt enable-animation" data-toggle="modal" data-target="#deleteMemberModal"></i>
	                	`));
	                	}
	                	tr.append($(`</td></tr>`));
	                  

			 			container.append(tr);
			 			i++;
	 		}

	
		memberTable.DataTable({
			pageLength: 50,
			fixedHeader: true,
			dom: 'Bfrtip',
			stateSave: true,
			buttons: [
	            'copy', 
	            'csv', 
	            'excel', 
	            'pdf', 
	            'print',
	            'colvis'
	        ]
		});


		$('#orderModal').on('shown.bs.modal', function (event) {
			var mode = $(event.relatedTarget).attr('data-mode');
			switch(mode) {
				case 'add':
					self.onAdditemClicked(event);

					break;
				case 'view':
					// window.open("http://localhost/8_3udayam/auto/pdf2.php"); 
					 self.onViewOrderClicked(event);
					
					break;
				case 'edit':
					self.onEditOrderClicked(event);
					break;
				default:
					break;
			}
		});

		$('#deleteMemberModal').on('shown.bs.modal', function (event) {
			var order_id = $(event.relatedTarget).closest('tr').attr('data-id');
			// var member = self.getRecord(familyID);
			var label = $('#deleteMemberModalLabel');
			label.text(`Delete the record of()?`);
			label.closest('.modal').find('.btn-primary').attr('onclick', `app.order_delete('${order_id}');`);
		
		});






	};



	self.order_view_cust = function(order_id) {

	

		$.ajax({
			url: 'php/members.php',
			method: 'POST',
			dataType: 'json',
			data: {
				action: 'get_order_cust',
				order_id: order_id 
			
			},
			success : function(data){
			        
			        	$('#order_name').text(data.cust_name);
			        	$('#view_order_id').text(data.sno);
			        	$('#view_order_date').text(data.order_date);
                        $('#order_area').text(data.cust_area);
			        	$('#view_order_rp').text(data.rep_name);
                        $('#view_note1').text(data.note1);
                        $('#view_note2').text(data.note2);
                        $('#view_note3').text(data.note3);
                        $('#view_note4').text(data.note4);
                        $('#view_note5').text(data.note5);
                        $('#view_note6').text(data.note6);
                        $('#view_note7').text(data.note7);
			        	// console.log(data.cust_name);


					}
			
			  });




	}
	
	
	
	self.order_view = function(order_id) {

		$('#order_name').text('hi');

		$.ajax({
			url: 'php/members.php',
			method: 'POST',
			dataType: 'json',
			data: {
				action: 'get_order_view',
				order_id: order_id 
			
			},
			success : function(data){
				self.load_order_view(data);


					}
			
			  });

    self.order_view_cust(order_id);


	}
	
	

	self.load_order_view = function(data) {

		$('#view_order_items').html("");

		var memberTable = $('#view_or');
		memberTable.DataTable().destroy();
		var container = memberTable.find('tbody');

		var i=0;

		while(data.rows>i){
		 var tr = $(`<tr data-id="${i}">`);
 						tr.append($(`<td>${i+1}</td>`));
						tr.append($(`<td class='text-left' style='text-align: left;margin: 5px;width: 101px;'> ${data[i].item_name}</td>`));
						
						tr.append($(`<td class='text-right' style='text-align: left;margin: 5px;width: 101px;'> ${data[i].item_qty}</td></tr>`));
						
						tr.append($(`<td class='text-right' style='text-align: left;margin: 5px;width: 101px;'> ${data[i].item_price}</td></tr>`));
						// tr.append($( "<td class='text-right' style='text-align: right;margin: 5px;width: 101px;'>  </td>"));
						
						


			 			container.append(tr);
			 			i++;
	 		}

	}


	self.test = function() {

		// 	$(".js-example-tags").select2({
		//   tags: true
		// });
		// $(".js-example-tokenizer").select2({
		// 	    tags: true,
		// 	    tokenSeparators: [',', ' ']
		// 	})
		    $("#e3").select2({
		      
		    });



				    $("#e3").select2({
		  templateSelection: formatState
		});

	};



self.delete_cust = function(cust_id) {
		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'delete',
					cust_id: cust_id 
				
				},
				success : function(data){
				
				

				}
				
			      });

		self.notify('successfully deleted');
		self.reloadMemberData()
		
		
		};


self.delete_rep = function(rep_id) {
		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'delete_rep',
					rep_id: rep_id 
				
				},
				success : function(data){
				
				

				}
				
			      });

		self.notify('successfully deleted');
		self.reloadrepData()
		
		
};


self.delete_item = function(item_code) {
		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'delete_item',
					item_code: item_code 
				
				},
				success : function(data){
				
				

				}
				
			      });

		self.notify('successfully deleted');
		self.reloadaItemData();
		
		
		};


		self.delete_item_cat = function(item_cat) {
			$.ajax({
					url: 'php/members.php',
					method: 'POST',
					dataType: 'json',
					data: {
						action: 'delete_itemcat',
						item_cat: item_cat 
					
					},
					success : function(data){
					
					
	
					}
					
					  });
	
			self.notify('successfully deleted');
			self.reloadcatData();
			
			
			};		


self.order_delete = function(order_id) {
		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'order_delete',
					order_id: order_id 
				
				},
				success : function(data){
				
				

				}

				
			      });

		self.notify('successfully deleted');
		self.reloadOrderData()
		
		};




	self.get_session = function() {
		$.ajax({
				url: 'php/members.php',
				method: 'POST',
				dataType: 'json',
				data: {
					action: 'get_session'
				
				},
				success : function(data){
				// alert(data);
				$('#orderModalLabel').text("New Order By : "+data);
				
				}
				
			      });
		return true;
		};

	 

};

window.onhashchange = app.handleNavigation;

// QR Code Generation
(function(r){r.fn.qrcode=function(h){var s;function u(a){this.mode=s;this.data=a}function o(a,c){this.typeNumber=a;this.errorCorrectLevel=c;this.modules=null;this.moduleCount=0;this.dataCache=null;this.dataList=[]}function q(a,c){if(void 0==a.length)throw Error(a.length+"/"+c);for(var d=0;d<a.length&&0==a[d];)d++;this.num=Array(a.length-d+c);for(var b=0;b<a.length-d;b++)this.num[b]=a[b+d]}function p(a,c){this.totalCount=a;this.dataCount=c}function t(){this.buffer=[];this.length=0}u.prototype={getLength:function(){return this.data.length},
write:function(a){for(var c=0;c<this.data.length;c++)a.put(this.data.charCodeAt(c),8)}};o.prototype={addData:function(a){this.dataList.push(new u(a));this.dataCache=null},isDark:function(a,c){if(0>a||this.moduleCount<=a||0>c||this.moduleCount<=c)throw Error(a+","+c);return this.modules[a][c]},getModuleCount:function(){return this.moduleCount},make:function(){if(1>this.typeNumber){for(var a=1,a=1;40>a;a++){for(var c=p.getRSBlocks(a,this.errorCorrectLevel),d=new t,b=0,e=0;e<c.length;e++)b+=c[e].dataCount;
for(e=0;e<this.dataList.length;e++)c=this.dataList[e],d.put(c.mode,4),d.put(c.getLength(),j.getLengthInBits(c.mode,a)),c.write(d);if(d.getLengthInBits()<=8*b)break}this.typeNumber=a}this.makeImpl(!1,this.getBestMaskPattern())},makeImpl:function(a,c){this.moduleCount=4*this.typeNumber+17;this.modules=Array(this.moduleCount);for(var d=0;d<this.moduleCount;d++){this.modules[d]=Array(this.moduleCount);for(var b=0;b<this.moduleCount;b++)this.modules[d][b]=null}this.setupPositionProbePattern(0,0);this.setupPositionProbePattern(this.moduleCount-
7,0);this.setupPositionProbePattern(0,this.moduleCount-7);this.setupPositionAdjustPattern();this.setupTimingPattern();this.setupTypeInfo(a,c);7<=this.typeNumber&&this.setupTypeNumber(a);null==this.dataCache&&(this.dataCache=o.createData(this.typeNumber,this.errorCorrectLevel,this.dataList));this.mapData(this.dataCache,c)},setupPositionProbePattern:function(a,c){for(var d=-1;7>=d;d++)if(!(-1>=a+d||this.moduleCount<=a+d))for(var b=-1;7>=b;b++)-1>=c+b||this.moduleCount<=c+b||(this.modules[a+d][c+b]=
0<=d&&6>=d&&(0==b||6==b)||0<=b&&6>=b&&(0==d||6==d)||2<=d&&4>=d&&2<=b&&4>=b?!0:!1)},getBestMaskPattern:function(){for(var a=0,c=0,d=0;8>d;d++){this.makeImpl(!0,d);var b=j.getLostPoint(this);if(0==d||a>b)a=b,c=d}return c},createMovieClip:function(a,c,d){a=a.createEmptyMovieClip(c,d);this.make();for(c=0;c<this.modules.length;c++)for(var d=1*c,b=0;b<this.modules[c].length;b++){var e=1*b;this.modules[c][b]&&(a.beginFill(0,100),a.moveTo(e,d),a.lineTo(e+1,d),a.lineTo(e+1,d+1),a.lineTo(e,d+1),a.endFill())}return a},
setupTimingPattern:function(){for(var a=8;a<this.moduleCount-8;a++)null==this.modules[a][6]&&(this.modules[a][6]=0==a%2);for(a=8;a<this.moduleCount-8;a++)null==this.modules[6][a]&&(this.modules[6][a]=0==a%2)},setupPositionAdjustPattern:function(){for(var a=j.getPatternPosition(this.typeNumber),c=0;c<a.length;c++)for(var d=0;d<a.length;d++){var b=a[c],e=a[d];if(null==this.modules[b][e])for(var f=-2;2>=f;f++)for(var i=-2;2>=i;i++)this.modules[b+f][e+i]=-2==f||2==f||-2==i||2==i||0==f&&0==i?!0:!1}},setupTypeNumber:function(a){for(var c=
j.getBCHTypeNumber(this.typeNumber),d=0;18>d;d++){var b=!a&&1==(c>>d&1);this.modules[Math.floor(d/3)][d%3+this.moduleCount-8-3]=b}for(d=0;18>d;d++)b=!a&&1==(c>>d&1),this.modules[d%3+this.moduleCount-8-3][Math.floor(d/3)]=b},setupTypeInfo:function(a,c){for(var d=j.getBCHTypeInfo(this.errorCorrectLevel<<3|c),b=0;15>b;b++){var e=!a&&1==(d>>b&1);6>b?this.modules[b][8]=e:8>b?this.modules[b+1][8]=e:this.modules[this.moduleCount-15+b][8]=e}for(b=0;15>b;b++)e=!a&&1==(d>>b&1),8>b?this.modules[8][this.moduleCount-
b-1]=e:9>b?this.modules[8][15-b-1+1]=e:this.modules[8][15-b-1]=e;this.modules[this.moduleCount-8][8]=!a},mapData:function(a,c){for(var d=-1,b=this.moduleCount-1,e=7,f=0,i=this.moduleCount-1;0<i;i-=2)for(6==i&&i--;;){for(var g=0;2>g;g++)if(null==this.modules[b][i-g]){var n=!1;f<a.length&&(n=1==(a[f]>>>e&1));j.getMask(c,b,i-g)&&(n=!n);this.modules[b][i-g]=n;e--; -1==e&&(f++,e=7)}b+=d;if(0>b||this.moduleCount<=b){b-=d;d=-d;break}}}};o.PAD0=236;o.PAD1=17;o.createData=function(a,c,d){for(var c=p.getRSBlocks(a,
c),b=new t,e=0;e<d.length;e++){var f=d[e];b.put(f.mode,4);b.put(f.getLength(),j.getLengthInBits(f.mode,a));f.write(b)}for(e=a=0;e<c.length;e++)a+=c[e].dataCount;if(b.getLengthInBits()>8*a)throw Error("code length overflow. ("+b.getLengthInBits()+">"+8*a+")");for(b.getLengthInBits()+4<=8*a&&b.put(0,4);0!=b.getLengthInBits()%8;)b.putBit(!1);for(;!(b.getLengthInBits()>=8*a);){b.put(o.PAD0,8);if(b.getLengthInBits()>=8*a)break;b.put(o.PAD1,8)}return o.createBytes(b,c)};o.createBytes=function(a,c){for(var d=
0,b=0,e=0,f=Array(c.length),i=Array(c.length),g=0;g<c.length;g++){var n=c[g].dataCount,h=c[g].totalCount-n,b=Math.max(b,n),e=Math.max(e,h);f[g]=Array(n);for(var k=0;k<f[g].length;k++)f[g][k]=255&a.buffer[k+d];d+=n;k=j.getErrorCorrectPolynomial(h);n=(new q(f[g],k.getLength()-1)).mod(k);i[g]=Array(k.getLength()-1);for(k=0;k<i[g].length;k++)h=k+n.getLength()-i[g].length,i[g][k]=0<=h?n.get(h):0}for(k=g=0;k<c.length;k++)g+=c[k].totalCount;d=Array(g);for(k=n=0;k<b;k++)for(g=0;g<c.length;g++)k<f[g].length&&
(d[n++]=f[g][k]);for(k=0;k<e;k++)for(g=0;g<c.length;g++)k<i[g].length&&(d[n++]=i[g][k]);return d};s=4;for(var j={PATTERN_POSITION_TABLE:[[],[6,18],[6,22],[6,26],[6,30],[6,34],[6,22,38],[6,24,42],[6,26,46],[6,28,50],[6,30,54],[6,32,58],[6,34,62],[6,26,46,66],[6,26,48,70],[6,26,50,74],[6,30,54,78],[6,30,56,82],[6,30,58,86],[6,34,62,90],[6,28,50,72,94],[6,26,50,74,98],[6,30,54,78,102],[6,28,54,80,106],[6,32,58,84,110],[6,30,58,86,114],[6,34,62,90,118],[6,26,50,74,98,122],[6,30,54,78,102,126],[6,26,52,
78,104,130],[6,30,56,82,108,134],[6,34,60,86,112,138],[6,30,58,86,114,142],[6,34,62,90,118,146],[6,30,54,78,102,126,150],[6,24,50,76,102,128,154],[6,28,54,80,106,132,158],[6,32,58,84,110,136,162],[6,26,54,82,110,138,166],[6,30,58,86,114,142,170]],G15:1335,G18:7973,G15_MASK:21522,getBCHTypeInfo:function(a){for(var c=a<<10;0<=j.getBCHDigit(c)-j.getBCHDigit(j.G15);)c^=j.G15<<j.getBCHDigit(c)-j.getBCHDigit(j.G15);return(a<<10|c)^j.G15_MASK},getBCHTypeNumber:function(a){for(var c=a<<12;0<=j.getBCHDigit(c)-
j.getBCHDigit(j.G18);)c^=j.G18<<j.getBCHDigit(c)-j.getBCHDigit(j.G18);return a<<12|c},getBCHDigit:function(a){for(var c=0;0!=a;)c++,a>>>=1;return c},getPatternPosition:function(a){return j.PATTERN_POSITION_TABLE[a-1]},getMask:function(a,c,d){switch(a){case 0:return 0==(c+d)%2;case 1:return 0==c%2;case 2:return 0==d%3;case 3:return 0==(c+d)%3;case 4:return 0==(Math.floor(c/2)+Math.floor(d/3))%2;case 5:return 0==c*d%2+c*d%3;case 6:return 0==(c*d%2+c*d%3)%2;case 7:return 0==(c*d%3+(c+d)%2)%2;default:throw Error("bad maskPattern:"+
a);}},getErrorCorrectPolynomial:function(a){for(var c=new q([1],0),d=0;d<a;d++)c=c.multiply(new q([1,l.gexp(d)],0));return c},getLengthInBits:function(a,c){if(1<=c&&10>c)switch(a){case 1:return 10;case 2:return 9;case s:return 8;case 8:return 8;default:throw Error("mode:"+a);}else if(27>c)switch(a){case 1:return 12;case 2:return 11;case s:return 16;case 8:return 10;default:throw Error("mode:"+a);}else if(41>c)switch(a){case 1:return 14;case 2:return 13;case s:return 16;case 8:return 12;default:throw Error("mode:"+
a);}else throw Error("type:"+c);},getLostPoint:function(a){for(var c=a.getModuleCount(),d=0,b=0;b<c;b++)for(var e=0;e<c;e++){for(var f=0,i=a.isDark(b,e),g=-1;1>=g;g++)if(!(0>b+g||c<=b+g))for(var h=-1;1>=h;h++)0>e+h||c<=e+h||0==g&&0==h||i==a.isDark(b+g,e+h)&&f++;5<f&&(d+=3+f-5)}for(b=0;b<c-1;b++)for(e=0;e<c-1;e++)if(f=0,a.isDark(b,e)&&f++,a.isDark(b+1,e)&&f++,a.isDark(b,e+1)&&f++,a.isDark(b+1,e+1)&&f++,0==f||4==f)d+=3;for(b=0;b<c;b++)for(e=0;e<c-6;e++)a.isDark(b,e)&&!a.isDark(b,e+1)&&a.isDark(b,e+
2)&&a.isDark(b,e+3)&&a.isDark(b,e+4)&&!a.isDark(b,e+5)&&a.isDark(b,e+6)&&(d+=40);for(e=0;e<c;e++)for(b=0;b<c-6;b++)a.isDark(b,e)&&!a.isDark(b+1,e)&&a.isDark(b+2,e)&&a.isDark(b+3,e)&&a.isDark(b+4,e)&&!a.isDark(b+5,e)&&a.isDark(b+6,e)&&(d+=40);for(e=f=0;e<c;e++)for(b=0;b<c;b++)a.isDark(b,e)&&f++;a=Math.abs(100*f/c/c-50)/5;return d+10*a}},l={glog:function(a){if(1>a)throw Error("glog("+a+")");return l.LOG_TABLE[a]},gexp:function(a){for(;0>a;)a+=255;for(;256<=a;)a-=255;return l.EXP_TABLE[a]},EXP_TABLE:Array(256),
LOG_TABLE:Array(256)},m=0;8>m;m++)l.EXP_TABLE[m]=1<<m;for(m=8;256>m;m++)l.EXP_TABLE[m]=l.EXP_TABLE[m-4]^l.EXP_TABLE[m-5]^l.EXP_TABLE[m-6]^l.EXP_TABLE[m-8];for(m=0;255>m;m++)l.LOG_TABLE[l.EXP_TABLE[m]]=m;q.prototype={get:function(a){return this.num[a]},getLength:function(){return this.num.length},multiply:function(a){for(var c=Array(this.getLength()+a.getLength()-1),d=0;d<this.getLength();d++)for(var b=0;b<a.getLength();b++)c[d+b]^=l.gexp(l.glog(this.get(d))+l.glog(a.get(b)));return new q(c,0)},mod:function(a){if(0>
this.getLength()-a.getLength())return this;for(var c=l.glog(this.get(0))-l.glog(a.get(0)),d=Array(this.getLength()),b=0;b<this.getLength();b++)d[b]=this.get(b);for(b=0;b<a.getLength();b++)d[b]^=l.gexp(l.glog(a.get(b))+c);return(new q(d,0)).mod(a)}};p.RS_BLOCK_TABLE=[[1,26,19],[1,26,16],[1,26,13],[1,26,9],[1,44,34],[1,44,28],[1,44,22],[1,44,16],[1,70,55],[1,70,44],[2,35,17],[2,35,13],[1,100,80],[2,50,32],[2,50,24],[4,25,9],[1,134,108],[2,67,43],[2,33,15,2,34,16],[2,33,11,2,34,12],[2,86,68],[4,43,27],
[4,43,19],[4,43,15],[2,98,78],[4,49,31],[2,32,14,4,33,15],[4,39,13,1,40,14],[2,121,97],[2,60,38,2,61,39],[4,40,18,2,41,19],[4,40,14,2,41,15],[2,146,116],[3,58,36,2,59,37],[4,36,16,4,37,17],[4,36,12,4,37,13],[2,86,68,2,87,69],[4,69,43,1,70,44],[6,43,19,2,44,20],[6,43,15,2,44,16],[4,101,81],[1,80,50,4,81,51],[4,50,22,4,51,23],[3,36,12,8,37,13],[2,116,92,2,117,93],[6,58,36,2,59,37],[4,46,20,6,47,21],[7,42,14,4,43,15],[4,133,107],[8,59,37,1,60,38],[8,44,20,4,45,21],[12,33,11,4,34,12],[3,145,115,1,146,
116],[4,64,40,5,65,41],[11,36,16,5,37,17],[11,36,12,5,37,13],[5,109,87,1,110,88],[5,65,41,5,66,42],[5,54,24,7,55,25],[11,36,12],[5,122,98,1,123,99],[7,73,45,3,74,46],[15,43,19,2,44,20],[3,45,15,13,46,16],[1,135,107,5,136,108],[10,74,46,1,75,47],[1,50,22,15,51,23],[2,42,14,17,43,15],[5,150,120,1,151,121],[9,69,43,4,70,44],[17,50,22,1,51,23],[2,42,14,19,43,15],[3,141,113,4,142,114],[3,70,44,11,71,45],[17,47,21,4,48,22],[9,39,13,16,40,14],[3,135,107,5,136,108],[3,67,41,13,68,42],[15,54,24,5,55,25],[15,
43,15,10,44,16],[4,144,116,4,145,117],[17,68,42],[17,50,22,6,51,23],[19,46,16,6,47,17],[2,139,111,7,140,112],[17,74,46],[7,54,24,16,55,25],[34,37,13],[4,151,121,5,152,122],[4,75,47,14,76,48],[11,54,24,14,55,25],[16,45,15,14,46,16],[6,147,117,4,148,118],[6,73,45,14,74,46],[11,54,24,16,55,25],[30,46,16,2,47,17],[8,132,106,4,133,107],[8,75,47,13,76,48],[7,54,24,22,55,25],[22,45,15,13,46,16],[10,142,114,2,143,115],[19,74,46,4,75,47],[28,50,22,6,51,23],[33,46,16,4,47,17],[8,152,122,4,153,123],[22,73,45,
3,74,46],[8,53,23,26,54,24],[12,45,15,28,46,16],[3,147,117,10,148,118],[3,73,45,23,74,46],[4,54,24,31,55,25],[11,45,15,31,46,16],[7,146,116,7,147,117],[21,73,45,7,74,46],[1,53,23,37,54,24],[19,45,15,26,46,16],[5,145,115,10,146,116],[19,75,47,10,76,48],[15,54,24,25,55,25],[23,45,15,25,46,16],[13,145,115,3,146,116],[2,74,46,29,75,47],[42,54,24,1,55,25],[23,45,15,28,46,16],[17,145,115],[10,74,46,23,75,47],[10,54,24,35,55,25],[19,45,15,35,46,16],[17,145,115,1,146,116],[14,74,46,21,75,47],[29,54,24,19,
55,25],[11,45,15,46,46,16],[13,145,115,6,146,116],[14,74,46,23,75,47],[44,54,24,7,55,25],[59,46,16,1,47,17],[12,151,121,7,152,122],[12,75,47,26,76,48],[39,54,24,14,55,25],[22,45,15,41,46,16],[6,151,121,14,152,122],[6,75,47,34,76,48],[46,54,24,10,55,25],[2,45,15,64,46,16],[17,152,122,4,153,123],[29,74,46,14,75,47],[49,54,24,10,55,25],[24,45,15,46,46,16],[4,152,122,18,153,123],[13,74,46,32,75,47],[48,54,24,14,55,25],[42,45,15,32,46,16],[20,147,117,4,148,118],[40,75,47,7,76,48],[43,54,24,22,55,25],[10,
45,15,67,46,16],[19,148,118,6,149,119],[18,75,47,31,76,48],[34,54,24,34,55,25],[20,45,15,61,46,16]];p.getRSBlocks=function(a,c){var d=p.getRsBlockTable(a,c);if(void 0==d)throw Error("bad rs block @ typeNumber:"+a+"/errorCorrectLevel:"+c);for(var b=d.length/3,e=[],f=0;f<b;f++)for(var h=d[3*f+0],g=d[3*f+1],j=d[3*f+2],l=0;l<h;l++)e.push(new p(g,j));return e};p.getRsBlockTable=function(a,c){switch(c){case 1:return p.RS_BLOCK_TABLE[4*(a-1)+0];case 0:return p.RS_BLOCK_TABLE[4*(a-1)+1];case 3:return p.RS_BLOCK_TABLE[4*
(a-1)+2];case 2:return p.RS_BLOCK_TABLE[4*(a-1)+3]}};t.prototype={get:function(a){return 1==(this.buffer[Math.floor(a/8)]>>>7-a%8&1)},put:function(a,c){for(var d=0;d<c;d++)this.putBit(1==(a>>>c-d-1&1))},getLengthInBits:function(){return this.length},putBit:function(a){var c=Math.floor(this.length/8);this.buffer.length<=c&&this.buffer.push(0);a&&(this.buffer[c]|=128>>>this.length%8);this.length++}};"string"===typeof h&&(h={text:h});h=r.extend({},{render:"canvas",width:256,height:256,typeNumber:-1,
correctLevel:2,background:"#ffffff",foreground:"#000000"},h);return this.each(function(){var a;if("canvas"==h.render){a=new o(h.typeNumber,h.correctLevel);a.addData(h.text);a.make();var c=document.createElement("canvas");c.width=h.width;c.height=h.height;for(var d=c.getContext("2d"),b=h.width/a.getModuleCount(),e=h.height/a.getModuleCount(),f=0;f<a.getModuleCount();f++)for(var i=0;i<a.getModuleCount();i++){d.fillStyle=a.isDark(f,i)?h.foreground:h.background;var g=Math.ceil((i+1)*b)-Math.floor(i*b),
j=Math.ceil((f+1)*b)-Math.floor(f*b);d.fillRect(Math.round(i*b),Math.round(f*e),g,j)}}else{a=new o(h.typeNumber,h.correctLevel);a.addData(h.text);a.make();c=r("<table></table>").css("width",h.width+"px").css("height",h.height+"px").css("border","0px").css("border-collapse","collapse").css("background-color",h.background);d=h.width/a.getModuleCount();b=h.height/a.getModuleCount();for(e=0;e<a.getModuleCount();e++){f=r("<tr></tr>").css("height",b+"px").appendTo(c);for(i=0;i<a.getModuleCount();i++)r("<td></td>").css("width",
d+"px").css("background-color",a.isDark(e,i)?h.foreground:h.background).appendTo(f)}}a=c;jQuery(a).appendTo(this)})}})(jQuery);