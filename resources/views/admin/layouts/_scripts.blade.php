	<script src="{{asset('admin/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('admin/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/steps-setting.js')}}"></script>
	<script src="{{ asset('admin/inputmask.js') }}"></script>
    <script>$('.phoneNumber').inputmask("(+1) 999-999-9999")</script>
    @toastr_js
	@toastr_render

	<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

	{!! JsValidator::formRequest('App\Http\Requests\Employees\CreateEmployeeRequest', '#createemployee') !!}
	{!! JsValidator::formRequest('App\Http\Requests\Companies\CreateCompanyRequest', '#createcompany') !!}
	<script>
		const deleteRecord = (id, uri) => {		 
			document.getElementById('identity').value = id;
			let route = window.location.origin + uri + id;
			document.getElementById('deleteForm').setAttribute('action', route)
			$('#deleteModal').modal('show')
		}			
	</script>
@yield('scripts')
	