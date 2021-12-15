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
class Heading_animate extends Widget_Base {

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
		return 'title-areas';
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
		return __( 'Heading animate', 'elementor-dekha' );
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
		return 'eicon-animated-headline';
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
				'label' => __( 'Heading animate', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'headinb_title01',
			[
				'label' => __( 'Befor title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Im', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'headinf_title01',
			[
				'label' => __( 'After title 01', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'After title 01', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'headinf_title02',
			[
				'label' => __( 'After title 02', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'After title 02', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'headinf_title03',
			[
				'label' => __( 'After title 03', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'After title 03', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'headinf_title04',
			[
				'label' => __( 'After title 04', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'After title 04', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'haeding_clr_section',
			[ 
				'label' => __( 'Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'titleb_color',
			[
				'label' => __( 'Before title color', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .fw_600' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'titlef_color',
			[
				'label' => __( 'After title color', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .fw_300' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'haeding_typo_section',
			[ 
				'label' => __( 'Font', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_befor_typography',
				'label' => __( 'Before title Typography', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .fw_600',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_after_typography',
				'label' => __( 'After title Typography', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .fw_300',
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
		
				<h1 class="cd-headline clip">
					<span class="fw_600"><?php echo $settings['headinb_title01']; ?></span>
					<span class="cd-words-wrapper" style="width: 87.2359px; overflow: hidden;">
						<b class="is-visible fw_300"><?php echo $settings['headinf_title01']; ?></b>
						<b class="fw_300"><?php echo $settings['headinf_title02']; ?></b>
						<b class="fw_300"><?php echo $settings['headinf_title03']; ?></b>
						<b class="fw_300"><?php echo $settings['headinf_title04']; ?></b>
					</span>
				</h1>   
                     
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
