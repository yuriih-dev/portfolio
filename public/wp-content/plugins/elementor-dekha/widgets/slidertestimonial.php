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
class Slidertes_area extends Widget_Base {

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
		return 'testimonia-area';
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
		return __( 'Dekha Testimonial', 'elementor-dekha' );
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
		return 'eicon-slider-video';
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
			'slide_slid',
			[
				'label' => __( 'Content', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
		);
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'slider_title', [
				'label' => __( 'Title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'William Ryan' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'slider_jb', [
				'label' => __( 'Job title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Web Developer' , 'elementor-dekha' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'slider_des', [
				'label' => __( 'Description', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem Ipsum is simply dummy text of the printing and 
				typesetting industry. Lorem Ipsum has been the industry s standard dummy text 
				ever since' , 'elementor-dekha' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'slider_img',
			[
				'label' => __( 'Choose Image', 'elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'thumbnail', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
				'exclude' => [ 'custom' ],
				'include' => [],
				'default' => 'large',
			]
		);
		$this->add_control(
			'list_slider',
			[
				'label' => __( 'Testimonial List', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'slider_title' => __( 'William Ryan', 'elementor-dekha' ),
                        'slider_jb' => __( 'Web Developer', 'elementor-dekha' ),
						'slider_des' => __( 'Lorem Ipsum is simply dummy text of the printing and 
						typesetting industry. Lorem Ipsum has been the industry s standard dummy text 
						ever since', 'elementor-dekha' ),
					],
					[
						'slider_title' => __( 'William Ryan', 'elementor-dekha' ),
                        'slider_jb' => __( 'Web Developer', 'elementor-dekha' ),
						'slider_des' => __( 'Lorem Ipsum is simply dummy text of the printing and 
						typesetting industry. Lorem Ipsum has been the industry s standard dummy text 
						ever since', 'elementor-dekha' ),
					],
				],
				'title_field' => '{{{ slider_title }}}',
			]
		);
       
        
		
		$this->end_controls_section();
		
		
		$this->start_controls_section(
			'color_slid',
			[
				'label' => __( 'Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_control(
			'sli_t_clr',
			[
				'label' => __( 'Tiltle', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .testimonial-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'sli_tjob_clr',
			[
				'label' => __( 'Job title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .test_designation' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'sli_tdes_clr',
			[
				'label' => __( 'Description', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .description' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'color_slid_t',
			[
				'label' => __( 'Typography', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'slidt_typography',
				'label' => __( 'Title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .testimonial-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'slidsstj_typography',
				'label' => __( 'Job title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .test_designation',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'slidtdes_typography',
				'label' => __( 'Description', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .description',
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


			<section id="testimonial_area" class="section_padding pb_70">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="testmonial_slider_area text-center owl-carousel">
							<?php if($settings['list_slider'] ): ?>
							<?php foreach ($settings['list_slider'] as $sideritems) {?>	
								<div class="single_testimonial">	
									<div class="pic">
										<?php echo  \Elementor\Group_Control_Image_Size::get_attachment_image_html( $sideritems, 'thumbnail', 'slider_img' );?>
									</div>	
									<h5 class="testimonial-title"><?php echo $sideritems['slider_title'] ; ?></h5>
									<span class="test_designation"><?php echo $sideritems['slider_jb'] ; ?></span>									
									<p class="description">
										<?php echo $sideritems['slider_des'] ; ?>
									</p>
								</div><!-- end Single Testimonials -->	
							<?php } ?>
							<?php endif ; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		
		
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
