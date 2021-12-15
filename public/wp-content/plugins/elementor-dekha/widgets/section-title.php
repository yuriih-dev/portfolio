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
class Section_title extends Widget_Base {

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
		return 'section_title';
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
		return __( 'Dekha Section title', 'elementor-dekha' );
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
		return 'eicon-t-letter-bold';
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
			'text_section',
			[
				'label' => __( 'Content', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
		);
		$this->add_control(
			'id_section',
			[
				'label' => __( 'ID', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'menu name', 'elementor-dekha' ),
				'placeholder' => __( 'Type your id here', 'elementor-dekha' ),
			]
		);
        $this->add_control(
			'top_title',
			[
				'label' => __( 'Top title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'top title', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
        );
        $this->add_control(
			'main_title',
			[
				'label' => __( 'Mian title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'mian title', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
        );
        $this->add_control(
			'sub_title',
			[
				'label' => __( 'Sub title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'sub title', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
       
		$this->end_controls_section();
		
		$this->start_controls_section(
			'sec_clr',
			[
				'label' => __( 'Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_control(
			'sc_clr',
			[
				'label' => __( 'Top title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .section_heading strong ' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'scm_clr',
			[
				'label' => __( 'Mian title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .section_heading h2 ' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'scs_clr',
			[
				'label' => __( 'Sub title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .section_heading p ' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'secbg_clr',
			[
				'label' => __( 'Background Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);

		$this->add_control(
			'scsb_clr',
			[
				'label' => __( 'Top title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .section_heading strong ' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'scsbd_clr',
			[
				'label' => __( 'Divider', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .sm_border ' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'secty_clr',
			[
				'label' => __( 'Typography', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'sets_typography',
				'label' => __( 'Top title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .section_heading strong',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'setsu_typography',
				'label' => __( 'Main title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .section_heading h2',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'setsau_typography',
				'label' => __( 'Description', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .section_heading p',
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
			<section id="<?php echo $settings['id_section']; ?>">
				<div class="section_heading text-center">
					<strong><?php echo $settings['top_title']; ?></strong>
						<h2><?php echo $settings['main_title']; ?></h2>
						<p><?php echo $settings['sub_title']; ?></p>
						<div class="sm_border"></div>
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
