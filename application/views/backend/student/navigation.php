<?php
	$status_wise_courses = $this->crud_model->get_status_wise_courses();
 ?>
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu left-side-menu-detached">
	<div class="leftbar-user">
		<a href="javascript: void(0);">
			<img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>" alt="user-image" height="42" class="rounded-circle shadow-sm">
			<?php
			$user_details = $this->user_model->get_all_student($this->session->userdata('user_id'))->row_array();
			?>
			<span class="leftbar-user-name"><?php echo strtoupper($user_details['first_name']).' '.strtoupper($user_details['last_name']); ?></span>
		</a>
	</div>

	<!--- Sidemenu -->
		<ul class="metismenu side-nav side-nav-light">

			<li class="side-nav-title side-nav-item"><?php echo get_phrase('navigation'); ?></li>

			<li class="side-nav-item">
				<a href="<?php echo site_url('student/manage_profile'); ?>" class="side-nav-link">
					<i class="dripicons-user-group"></i>
					<span><?php echo get_phrase('profile'); ?></span>
				</a>
			</li>

			<li class="side-nav-item <?php if ($page_name == 'categories' || $page_name == 'category_add' || $page_name == 'category_edit' ): ?> active <?php endif; ?>">
				<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'categories' || $page_name == 'category_add' || $page_name == 'category_edit' ): ?> active <?php endif; ?>">
					<i class="dripicons-network-1"></i>
					<span> <?php echo get_phrase('chapters'); ?> </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<li class = "<?php if($page_name == 'categories' || $page_name == 'category_edit') echo 'active'; ?>">
						<a href="<?php echo site_url('user/categories'); ?>"><?php echo get_phrase('chapter_list'); ?></a>
					</li>

					<li class = "<?php if($page_name == 'category_add') echo 'active'; ?>">
						<a href="<?php echo site_url('user/category_form/add_category'); ?>"><?php echo get_phrase('add_new_chapter'); ?></a>
					</li>
				</ul>
			</li>

			<li class="side-nav-item">
				<a href="<?php echo site_url('user/courses'); ?>" class="side-nav-link <?php if ($page_name == 'courses' || $page_name == 'course_add' || $page_name == 'course_edit')echo 'active';?>">
					<i class="dripicons-archive"></i>
					<span><?php echo get_phrase('unit'); ?></span>
				</a>
			</li>
			<!-- <li class="side-nav-item">
				<a href="<?php echo site_url('user/instructor_revenue'); ?>" class="side-nav-link <?php if ($page_name == 'report' || $page_name == 'invoice')echo 'active';?>">
					<i class="dripicons-media-shuffle"></i>
					<span><?php echo get_phrase('instructor_revenue'); ?></span>
				</a>
			</li> -->

			<li class="side-nav-item">
			<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'system_settings' || $page_name == 'frontend_settings' || $page_name == 'payment_settings' || $page_name == 'instructor_settings' || $page_name == 'smtp_settings' || $page_name == 'manage_language' ): ?> active <?php endif; ?>">
				<i class="dripicons-toggles"></i>
				<span> <?php echo get_phrase('settings'); ?> </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "<?php if($page_name == 'payment_settings') echo 'active'; ?>">
					<a href="<?php echo site_url('user/payment_settings'); ?>"><?php echo get_phrase('payment_settings'); ?></a>
				</li>
			</ul>
		</li>
	    </ul>
</div>
