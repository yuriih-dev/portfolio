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
class Intro_section extends Widget_Base {

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
		return 'intro-area';
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
		return __( 'Dekha Intro', 'elementor-dekha' );
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
		return 'eicon-flash';
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
			'text_work',
			[
				'label' => __( 'Content', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
		$this->add_control(
			'brinpar_sty',
			[
				'label' => __( 'Particles ', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'p_on' => __( 'Show', 'elementor-dekha' ),
				'p_off ' => __( 'Hide', 'elementor-dekha' ),
				'return_value' => 'particles-js',
				'default' => 'none',
			]
		);

        $this->add_control(
			'id_intr',
			[
				'label' => __( 'ID', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'menu name', 'elementor-dekha' ),
				'placeholder' => __( 'Type your id here', 'elementor-dekha' ),
			]
		);
        $this->add_control(
			'intro_top_title',
			[
				'label' => __( 'Top title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'top title', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
        );
        $this->add_control(
			'intro_main_title',
			[
				'label' => __( 'Before title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'I Am', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
        );

        $this->add_control(
			'intro_after01_title',
			[
				'label' => __( 'After title 01', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Abdur Rahman', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
        );

        $this->add_control(
			'intro_after02_title',
			[
				'label' => __( 'After title 02', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Web Designer', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
        );
        $this->add_control(
			'intro_after03_title',
			[
				'label' => __( 'After title 03', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Web Developer', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
        );
        $this->add_control(
			'intro_after03_title',
			[
				'label' => __( 'After title 03', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Web Developer', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
        );

        $this->add_control(
			'intro_after04_title',
			[
				'label' => __( 'After title 04', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Photographer', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
        );

        $this->add_control(
			'intro_des',
			[
				'label' => __( 'Short Description', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __('I m a Web Developer with extensive experience for over 5 years. My expertise is to create and Websites design, graphic design, business card and many more...', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
        );
        
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'intro_social_icon', [
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'font icon class' , 'elementor-dekha' ),
				'label_block' => true,
			]
        );
        $repeater->add_control(
			'intro_url',
			[
				'label' => __( 'Link', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'elementor-dekha' ),
				'show_external' => true,
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
        
		$this->add_control(
			'intro_icon',
			[
				'label' => __( 'Social Icon List', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'intro_social_icon' => __( '', 'elementor-dekha' ),
						'intro_url' => __( '#', 'elementor-dekha' ),
					],
					[
						'intro_social_icon' => __( '', 'elementor-dekha' ),
						'intro_url' => __( '#', 'elementor-dekha' ),
					],
				],
				'title_field' => '{{{ intro_social_icon }}}',
			]
        );
        $this->end_controls_section();

        $this->start_controls_section(
			'intro_style',
			[
				'label' => __( 'Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'intro_top_clr',
			[
				'label' => __( 'Top titile', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .top-title' => 'color: {{VALUE}}',
				],
			]
        );
        $this->add_control(
			'intro_before_clr',
			[
				'label' => __( 'Before titile', 'elementor-dekha' ),
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
			'intro_after_clr',
			[
				'label' => __( 'After titile', 'elementor-dekha' ),
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
        
        $this->add_control(
			'intro_des_clr',
			[
				'label' => __( 'Description', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .des' => 'color: {{VALUE}}',
				],
			]
        );
        $this->end_controls_section();

        $this->start_controls_section(
			'intro_icons',
			[
				'label' => __( 'Icon', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'intro_icon_clr',
			[
				'label' => __( 'Icon', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .banner_social_link li a' => 'color: {{VALUE}}',
                ],
			]
        );
        $this->add_control(
			'intro_iconbor_clr',
			[
				'label' => __( 'Icon Border', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .banner_social_link li a' => 'border-color: {{VALUE}}',
                ],
			]
        );
        $this->add_control(
			'intro_iconhover_clr',
			[
				'label' => __( 'Icon Hover', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .banner_social_link li a:hover' => 'color: {{VALUE}}',
                ],
			]
        );
        $this->add_control(
			'intro_iconbhover_clr',
			[
				'label' => __( 'Icon Border Hover', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .banner_social_link li a:hover' => 'border-color: {{VALUE}}',
                ],
			]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'icon_typography',
				'label' => __( 'Icon Size', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .banner_social_link li a',
			]
        );
        $this->end_controls_section();

        $this->start_controls_section(
			'intro_typo',
			[
				'label' => __( 'Typography', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'top_typography',
				'label' => __( 'Top title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .top-title',
			]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'be_typography',
				'label' => __( 'Before title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .fw_600',
			]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'af_typography',
				'label' => __( 'Aftre title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .fw_300',
			]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'des_typography',
				'label' => __( 'Description', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .des',
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
            <section class="main_banner particles" id="<?php echo $settings['id_intr']; ?>">
				<div id="<?php echo  $settings['brinpar_sty'];?>"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-12 col-xs-12">
							<div class="banner_content">
								<strong class="top-title"><?php echo $settings['intro_top_title'];?></strong>
								<h1 class="cd-headline clip">
									<span class="fw_600"><?php echo $settings['intro_main_title'];?></span>
									<span class="cd-words-wrapper" style="width: 204.613px; overflow: hidden;">
										<b class="fw_300 is-hidden"><?php echo $settings['intro_after01_title'];?></b>
										<b class="fw_300 is-visible"><?php echo $settings['intro_after02_title'];?></b>
										<b class="fw_300 is-hidden"><?php echo $settings['intro_after03_title'];?></b>
										<b class="fw_300 is-hidden"><?php echo $settings['intro_after04_title'];?></b>
									</span>
								</h1>
								<p class="des"><?php echo $settings['intro_des'];?></p>
								<ul class="banner_social_link">	
                                    <?php if($settings['intro_icon'] ): ?>
                                        <?php foreach ($settings['intro_icon'] as $iconintro) {?>				
                                    <li><a href="<?php echo $iconintro['intro_url']['url']; ?>"><?php echo $iconintro['intro_social_icon']; ?></a></li>
                                    <?php } ?>
                                    <?php endif ; ?>
                                </ul>
							</div>
						</div>
						<div class="col-md-5 col-sm-12 col-xs-12"></div>
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
