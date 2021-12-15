<?php
namespace DekhaElementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Dekha
 *
 * Elementor widget for Dekha
 *
 * @since 1.0.0
 */
class About_img extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'about-area';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Dekha About Me', 'elementor-dekha' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-apps';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'dekha-category' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'elementor-dekha' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'about_me',
			[
				'label' => __( 'Content', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'id_ab',
			[
				'label' => __( 'ID', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'menu name', 'elementor-dekha' ),
				'placeholder' => __( 'Type your id here', 'elementor-dekha' ),
			]
		);
        $this->add_control(
			'about_top_title',
			[
				'label' => __( 'Top title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'About Me', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'about_sub_title',
			[
				'label' => __( 'Sub title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Im Professional web Developer having 10 Years Of Experience.', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'about_des_title',
			[
				'label' => __( 'Description', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tellus est, finibus ut congue sed, faucibus ut dui. Sed congue nisl dolor, id dapibus leo elementum posuere. Ut aliquam metus quis laoreet elementum. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Aliquam porta faucibus arcu, et consequat velit vestibulum in. Donec quis tellus ut urna volutpat posuere quis consectetur quam. ', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'about_btn_title',
			[
				'label' => __( 'Button title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Download Resume' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'btn_link',
			[
				'label' => __( 'Button Link', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'elementor-dekha' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);

		
        $this->add_control(
			'ab_image',
			[
				'label' => __( 'Choose Image', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'thumbnail', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
				'exclude' => [ 'custom' ],
				'include' => [],
				'default' => 'large',
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'ab_social_icon', [
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( ' ' , 'elementor-dekha' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'ab_s_title',
			[
				'label' => __( 'Icon Name', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Location', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		$repeater->add_control(
			'ab_in_title',
			[
				'label' => __( 'Info', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( ' ', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'ab_text',
			[
				'label' => __( 'Information list', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[	
						'ab_social_icon' => __( ' ', 'elementor-dekha' ),
						'ab_s_title' => __( 'Location', 'elementor-dekha' ),
						'ab_in_title' => __( ' ', 'elementor-dekha' ),


					],
					[
						'ab_social_icon' => __( ' ', 'elementor-dekha' ),
						'ab_s_title' => __( 'Location', 'elementor-dekha' ),
						'ab_in_title' => __( ' ', 'elementor-dekha' ),
					],
				],
				'title_field' => '{{{ ab_social_icon }}}',
			]
        );

		$this->end_controls_section();

		$this->start_controls_section(
			'about_style',
			[
				'label' => __( 'Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'ab_top_clr',
			[
				'label' => __( 'Top tiltle', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .ab-top-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'ab_sub_clr',
			[
				'label' => __( 'Sub tiltle', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .ab-sub' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'ab_des_clr',
			[
				'label' => __( 'Descriptiom', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .ab-des' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'ab_in_clr',
			[
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .ab-icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'ab_info_clr',
			[
				'label' => __( 'Info', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .ct_about' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'about_typo',
			[
				'label' => __( 'Typography', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'abt_typography',
				'label' => __( 'Top title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ab-top-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'abs_typography',
				'label' => __( 'Sub title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ab-sub',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'abd_typography',
				'label' => __( 'Description', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ab-des',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'abi_typography',
				'label' => __( 'Icon', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ab-icons',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'abin_typography',
				'label' => __( 'Info', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ct_about',
			]
		);
		$this->end_controls_section();

	}
	
	
	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		?>
			<!-- START ABOUT -->
			<section id="<?php echo $settings['id_ab'];?>" class="section_padding">
				<div class="container">
					<div class="single_about">
						<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-12">
							<div class="about_image">
								<?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'ab_image' );?>
							</div>
							</div>
							
							<div class="col-md-7 col-sm-7 col-xs-12">
								<div class="about_content_area">
									<h4 class="ab-top-title"><?php echo $settings['about_top_title']; ?></h4>
									<h3 class="ab-sub"><?php echo $settings['about_sub_title']; ?></h3>
									<p class="ab-des"><?php echo $settings['about_des_title']; ?></p>
									<div class="about_details">
										<div class="row">
										<?php if($settings['ab_text'] ): ?>
                                        <?php foreach ($settings['ab_text'] as $abouintro) {?>
											<div class="col-md-6">
												<div class="ct_about">
												   <span class="ab-icons"><?php echo $abouintro['ab_social_icon']; ?><?php echo $abouintro['ab_s_title']; ?></span>
												   <?php echo $abouintro['ab_in_title']; ?>
												</div>
											</div>
											<?php } ?>
                                    <?php endif ; ?>
										</div>
									</div>
									
									<a href="<?php echo $settings['btn_link']['url'] ;?>" class="btn btn-default main_btn"><?php echo $settings['about_btn_title'] ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<!-- END ABOUT -->
                     
		<?php
		
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	
}
