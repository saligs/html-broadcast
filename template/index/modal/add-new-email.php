<div class="modal fade modal-aside vertical top modal-custom modal-add-new-email"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
	<div class="modal-dialog modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="container">
					<h5 class="over-title margin-bottom-0">Add Your <span class="text-bold">New Email</span></h5>
				</div>
			</div>
			<div class="modal-body">
				<div class="form-before">
					<form class="form container">
						<div class="form-group">
							<p>We needed a verification email first, so that the broadcast was sent by email which you have registered</p>
							<input class="form-control" id="InputEmail1" placeholder="Type your email here.." type="email">
						</div>
						<button type="button" class="btn btn-wide btn-primary pull-right" onclick="$('.form-before').hide();$('.form-after').show();">
							Send Link Verification
						</button>
					</form>
				</div>
				<div class="form-after" style="display: none;">
					<div class="container">
						<h5 class="over-title margin-bottom-15"><span class="text-bold">Thank You</span></h5>
						<p>
							We already send your Link Verification to your email.
							Please check it now! If you can't get the link, please click <a href="#" class="underline">Resend Link Verification</a>
						</p>
						<button type="button" class="btn btn-wide btn-primary" data-dismiss="modal">
							Back to Email Setting
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>