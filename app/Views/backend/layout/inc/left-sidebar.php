<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.html">
					<img src="/images/img2.jpg" alt="EGOBLOG" style="max-width: 80px; height: auto;" />
					 <img
						src="/images/img4.jpg" style="max-width: 100px; height: auto;"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
					    <li>
							<a href="<?= route_to('admin.home'); ?>" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-home"></span
								><span class="mtext">Home</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon dw dw-newspaper"></span
								><span class="mtext">Posts</span>
							</a>
							<ul class="submenu">
								<li><a href="">All posts</a></li>
							</ul>
						</li>

						<li>
							<a href="<?= route_to('admin.profile'); ?>" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-user"></span>
								<span class="mtext">Profile</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>