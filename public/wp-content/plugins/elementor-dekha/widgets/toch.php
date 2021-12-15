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
class Contact_section extends Widget_Base {

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
		return 'contcat_section';
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
		return __( 'Dekha Contact', 'elementor-dekha' );
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
		return ' eicon-envelope';
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
			'contact_section',
			[
				'label' => __( 'Content', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'conde_section',
			[
				'label' => __( 'Short code', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( ' ', 'elementor-dekha' ),
				'placeholder' => __( 'Type your contact form short code here', 'elementor-dekha' ),
			]
        );
        
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'coninfo_title', [
				'label' => __( 'Title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Home' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'coninfo_icon', [
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '<i class="fa fa-home"></i>' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );
        $repeater->add_control(
			'coninfo_des', [
				'label' => __( 'Description', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( '1719 Del Dew Drive Annapolis Junction, MD 20701 California, United State' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );
		$this->add_control(
			'list_coninfo',
			[
				'label' => __( 'Contact info  List', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'coninfo_title' => __( 'Home', 'elementor-dekha' ),
                        'coninfo_icon' => __( '<i class="fa fa-home"></i>', 'elementor-dekha' ),
						'coninfo_des' => __( '1719 Del Dew Drive Annapolis Junction, MD 20701 California, United State', 'elementor-dekha' ),
					],
					[
						'coninfo_title' => __( 'Home', 'elementor-dekha' ),
                        'coninfo_icon' => __( '<i class="fa fa-home"></i>', 'elementor-dekha' ),
						'coninfo_des' => __( '1719 Del Dew Drive Annapolis Junction, MD 20701 California, United State', 'elementor-dekha' ),
					],
				],
				'title_field' => '{{{ coninfo_title }}}',
			]
        );
        
        $this->end_controls_section();

		$this->start_controls_section(
			'contact_style',
			[
				'label' => __( 'Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_control(
			'contactt_clr',
			[
				'label' => __( 'Title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .ct-title ' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'contactdst_clr',
			[
				'label' => __( 'Description', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .cd-info ' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'contactdset_clr',
			[
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .contact_info i ' => 'color: {{VALUE}}',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'contactcrety_style',
			[
				'label' => __( 'Typography', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'contactt_typography',
				'label' => __( 'Title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ct-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'contacttess_typography',
				'label' => __( 'Description', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .cd-info',
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
		
		<!-- START CONTACT -->
            <section id="cont">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">                           
                            <?php echo  $settings['conde_section']  ?>
                        </div>
						<div class="col-md-5 col-sm-12">
							<div class="contact_widget_area">
                            <?php if($settings['list_coninfo'] ): ?>
					            <?php foreach ($settings['list_coninfo'] as $cinfoitems) {?>	
								<div class="contact_info">
									<?php echo  $cinfoitems ['coninfo_icon'] ?>
									<div class="contact_info_text">
										<h5 class="ct-title"><?php echo  $cinfoitems ['coninfo_title'] ?></h5>
										<p class="cd-info"><?php echo  $cinfoitems ['coninfo_des'] ?>
										</p>
									</div>
                                </div>
                                <?php } ?>
				                <?php endif ; ?>    
							</div>
						</div>
					</div>
				</div>
			</section>
		<!-- END CONTACT -->
                     
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
