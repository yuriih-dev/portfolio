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
class Counter_area extends Widget_Base {

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
		return 'counter-area';
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
		return __( 'Dekha Counter', 'elementor-dekha' );
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
		return 'eicon-counter';
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
			'counter_content',
			[
				'label' => __( 'Content', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'counter_title', [
				'label' => __( 'Title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Web Development' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'counter_icon', [
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '<i class="icon-laptop"></i>' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );
        $repeater->add_control(
			'counter_number', [
				'label' => __( 'Number', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( '300' ),
				'label_block' => true,
			]
        );
        $repeater->add_control(
			'br_sty',
			[
				'label' => __( 'Border', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'border_left' => __( 'Show', 'elementor-dekha' ),
				'border_left ' => __( 'Hide', 'elementor-dekha' ),
				'return_value' => 'border_left"',
				'default' => 'res_border_none',
			]
		);
		$this->add_control(
			'list_counter',
			[
				'label' => __( 'Counter List', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'counter_title' => __( 'Happy Clients', 'elementor-dekha' ),
                        'counter_icon' => __( '<i class="icon-happy"></i>', 'elementor-dekha' ),
						'counter_number' => __( '300', 'elementor-dekha' ),
					],
					[
						'counter_title' => __( 'Happy Clients', 'elementor-dekha' ),
                        'counter_icon' => __( '<i class="icon-happy"></i>', 'elementor-dekha' ),
						'counter_number' => __( '300', 'elementor-dekha' ),
					],
				],
				'title_field' => '{{{ counter_title }}}',
			]
		);
        
		
        $this->end_controls_section();

        $this->start_controls_section(
			's_content',
			[
				'label' => __( 'Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_control(
			'counter_tclr',
			[
				'label' => __( 'Title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .c-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'counter_nclr',
			[
				'label' => __( 'Number', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .counter' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'counter_iclr',
			[
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .icon i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'counter_ibclr',
			[
				'label' => __( 'Border', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .border_left' => 'border-left-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'yu_content',
			[
				'label' => __( 'Typography', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 't_typography',
				'label' => __( 'Title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .c-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'n_typography',
				'label' => __( 'Number', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .counter',
			]
		);
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

			<section id="counter_area">				
				<div class="container">
					<div class="row text-center">
                    <?php if($settings['list_counter'] ): ?>
                    <?php foreach ($settings['list_counter'] as $counrtitems) {?>
						<div class="col-md-3 col-sm-6 col-xs-12 <?php echo $counrtitems['br_sty']; ?>">
							<div class="single_counter">
								<div class="icon">
									<?php echo $counrtitems['counter_icon'] ; ?>
								</div>
								<span class="counter"><?php echo $counrtitems['counter_number'] ; ?></span>
								<h5 class="c-title"><?php echo $counrtitems['counter_title'] ; ?></h5>
							</div>
                        </div>
                        <?php } ?>
				    <?php endif ; ?>
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
