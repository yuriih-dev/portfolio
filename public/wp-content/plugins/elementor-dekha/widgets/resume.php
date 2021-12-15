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
class Resume_area extends Widget_Base {

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
		return 'resume-area';
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
		return __( 'Dekha Resume', 'elementor-dekha' );
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
		return 'eicon-person';
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
			'resume_content',
			[
				'label' => __( 'Content', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'resume_id', [
				'label' => __( 'ID', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'resume' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'resume_yer', [
				'label' => __( 'Year', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '2000 - 2005' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'resume_title', [
				'label' => __( 'Title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Computer science' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );
        $repeater->add_control(
			'resume_des', [
				'label' => __( 'Description', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Enim eveniet incidunt quidem illum repellat, a nemo cumque optio asperiores
                tempora delectus cupiditate' ),
				'label_block' => true,
			]
        );


		$this->add_control(
			'list_resume',
			[
				'label' => __( 'resume List', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'resume_yer' => __( '2000 - 2005', 'elementor-dekha' ),
                        'resume_title' => __( 'Computer science', 'elementor-dekha' ),
						'resume_des' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Enim eveniet incidunt quidem illum repellat, a nemo cumque optio asperiores
                        tempora delectus cupiditate', 'elementor-dekha' ),
                    ],
                    [
						'resume_yer' => __( '2000 - 2005', 'elementor-dekha' ),
                        'resume_title' => __( 'Computer science', 'elementor-dekha' ),
						'resume_des' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Enim eveniet incidunt quidem illum repellat, a nemo cumque optio asperiores
                        tempora delectus cupiditate', 'elementor-dekha' ),
					],
					
				],
				'title_field' => '{{{ resume_yer }}}',
			]
		);
        
		
        $this->end_controls_section();

        $this->start_controls_section(
			'resume_color',
			[
				'label' => __( 'Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'resume_yclr',
			[
				'label' => __( 'Year', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .edu-list li strong' => 'color: {{VALUE}}',
				],
			]
        );
        $this->add_control(
			'resume_tclr',
			[
				'label' => __( 'Title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .edu-list li h5' => 'color: {{VALUE}}',
				],
			]
        );
        $this->add_control(
			'resume_dclr',
			[
				'label' => __( 'Description', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .edu-list li p' => 'color: {{VALUE}}',
				],
			]
        );
        $this->add_control(
			'resumef_dclr',
			[
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .edu-list > li::after' => 'color: {{VALUE}}',
				],
			]
        );
        $this->add_control(
			'resume_bgdclr',
			[
				'label' => __( 'Icon background', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .edu-list > li::after' => 'background-color: {{VALUE}}',
				],
			]
        );
        $this->add_control(
			'resume_bgdclr',
			[
				'label' => __( 'Border', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .edu-list > li:not(:last-child)::before' => 'background-color: {{VALUE}}',
				],
			]
        );

        $this->end_controls_section();
        
        
        $this->start_controls_section(
			'resume_ty',
			[
				'label' => __( 'Typography', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'sre_typography',
				'label' => __( 'Year', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .edu-list li strong',
			]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'res_typography',
				'label' => __( 'Title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .edu-list li h5',
			]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'resw_typography',
				'label' => __( 'Description', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .edu-list li p',
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
            <section class="resume" id="<?php echo $settings['resume_id'] ; ?>">
				<div class="container">
					<div class="row">

						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="education-container " style="visibility: visible;">
								<ul class="edu-list">
                                <?php if($settings['list_resume'] ): ?>
                                <?php foreach ($settings['list_resume'] as $resumetitems) {?>
									<li>
										<strong><?php echo $resumetitems['resume_yer']?></strong>
										<h5><?php echo $resumetitems['resume_title']?></h5>
										<p><?php echo $resumetitems['resume_des']?></p>
                                    </li>
                                    <?php } ?>
				                 <?php endif ; ?>
								</ul>
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
