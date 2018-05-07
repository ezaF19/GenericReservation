<div class="main">
    <div class="container-fluid">
        <section id="main-content">
            <div class="row"  align="center">
                <div class="col-lg-4" style="margin-left: 33%; margin-top: 10%">
                    <div class="card1">
                        <div class="card-title">
                            <h2 style="color:  #ccc;">Login</h2>
                        </div>
					
						<?php echo form_open('login') ?>
						<div class="input-group form-group" align="center">
							<input id="username" type="text" class="form-control input-lg" name="username" placeholder="Username" required>
						</div>
						
						<div class="input-group form-group" align="center">
							<input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password" required>
						</div>
						<div class="form-group" align="center">
							<input type="submit" name="login" class="btn btn-primary input-lg form-control" value="Login">
						</div>
						<?php echo form_close()?>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>