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
class Services_section extends Widget_Base {

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
		return 'services-area';
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
		return __( 'Dekha Service', 'elementor-dekha' );
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
		return 'eicon-wrench';
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
			'text_icon',
			[
				'label' => __( 'Content', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'services_title', [
				'label' => __( 'Title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Web Development' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'services_icon', [
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '<i class="icon-laptop"></i>' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );
        $repeater->add_control(
			'services_des', [
				'label' => __( 'Description  here', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis lectus tortor, et congue felis laoreet ac ' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );
		$this->add_control(
			'list_services',
			[
				'label' => __( 'Service List', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'services_title' => __( 'Web Development', 'elementor-dekha' ),
                        'services_icon' => __( '<i class="icon-laptop"></i>', 'elementor-dekha' ),
						'services_des' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis lectus tortor, et congue felis laoreet ac ' ,'elementor-dekha' ),
					],
					[
						'services_title' => __( 'Web Development', 'elementor-dekha' ),
                        'services_icon' => __( '<i class="icon-laptop"></i>', 'elementor-dekha' ),
						'services_des' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis lectus tortor, et congue felis laoreet ac ' ,'elementor-dekha' ),

					],
				],
				'title_field' => '{{{ services_title }}}',
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'ser_typo',
			[
				'label' => __( 'Typography', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ser_typography',
				'label' => __( 'Top title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .single-service h4',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'serdse_typography',
				'label' => __( 'Description', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .single-service p',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ssder_typography',
				'label' => __( 'Icon', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .single-service i',
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'ser_clr',
			[
				'label' => __( 'Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);

		$this->add_control(
			'sertitle_clr',
			[
				'label' => __( 'Title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .single-service h4 ' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'serds_clr',
			[
				'label' => __( 'Description', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .single-service p ' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'serdi_clr',
			[
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .single-service i ' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'serhover_clr',
			[
				'label' => __( 'Hover Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);

		$this->add_control(
			'seriho_clr',
			[
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .single-service i:hover ' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'sertxo_clr',
			[
				'label' => __( 'Title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .single-service h4:hover ' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'sertxobr_clr',
			[
				'label' => __( 'Border', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .single-service:hover ' => 'border-bottom-color: {{VALUE}}',
				],
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
		
			<div class="row text-center">
				<?php if($settings['list_services'] ): ?>
					<?php foreach ($settings['list_services'] as $seritems) {?>	
							<div class="col-md-4 col-sm-6 col-xs-12">			
								<div class="single-service text-center">
									<?php echo $seritems['services_icon']?>
									<h4><?php echo $seritems['services_title']?></h4>
									<p><?php echo $seritems['services_des']?></p>
								</div>
							</div>
				<?php } ?>
				<?php endif ; ?>
			</div>

	
                     
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
