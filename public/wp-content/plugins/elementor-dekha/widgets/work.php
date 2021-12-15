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
class Portfolio_section extends Widget_Base {

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
		return 'portfolio-area';
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
		return __( 'Dekha Works', 'elementor-dekha' );
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
		return ' eicon-folder';
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
			'works',
			[
				'label' => __( 'Content', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
		);
		$this->add_control(
			'works_per_page',
			[
				'label' => __( 'Per page work', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '6', 'elementor-dekha' ),
				'placeholder' => __( 'Type your count here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'works_btn',
			[
				'label' => __( 'Button title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'More Work', 'elementor-dekha' ),
				'placeholder' => __( 'Type your title here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'work_link',
			[
				'label' => __( 'Button url', 'elementor-dekha' ),
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

        $this->end_controls_section();

		$this->start_controls_section(
			'work_stye',
			[
				'label' => __( 'Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_control(
			'wf_clr',
			[
				'label' => __( 'Filter', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .work_filter ul li' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wf_clrh',
			[
				'label' => __( 'Filter hover', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .work_filter ul li:hover' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'wfa_clr',
			[
				'label' => __( 'Filter active', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .work_filter ul li.active ' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wfab_clr',
			[
				'label' => __( 'Filter active background', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .work_filter ul li.active ' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wfabtn_clr',
			[
				'label' => __( 'Button', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .port_content_button a ' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'wfabtnh_clr',
			[
				'label' => __( 'Button hover', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .port_content_button:hover a ' => 'color: {{VALUE}}',
				],
			]
        );
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'work_ty',
			[
				'label' => __( 'Typography', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wor_typography',
				'label' => __( 'Filter', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .work_filter ul li',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'wose_typography',
				'label' => __( 'Button', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .btn btn-default main_btn',
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
		$works_per_page = $settings['works_per_page'];
		?>
		<!-- START PORTFOLIO -->
		
					<div class="row contents">
						<div class="work_filter text-center">
							<ul>
								<li class="active" data-filter="*">All</li>
								<?php
								$terms = get_terms('categories');
								?>
								<?php foreach ($terms as $term) {?>
								<li data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
								<?php } ?>
								
							</ul>
						</div>
						<div class="work_content_area">
						<?php
						
						$query = new \WP_Query(array(
							'post_type' => 'work_post',
							'posts_per_page' => $works_per_page,
							'taxonomy' => 'categories',

						));

						if($query -> have_posts()):
							while($query -> have_posts()) : $query -> the_post();?>
					
						<?php
						$wordimg_ID=get_post_thumbnail_id(get_the_ID());

						$terms = get_the_terms( get_the_ID(), 'categories' );
												
						if ( $terms && ! is_wp_error( $terms ) ) : 
						
							$draught_links = array();
						
							foreach ( $terms as $term ) {
								$draught_links[] = $term->slug;
							}
												
						$on_draught = join( " ", $draught_links );
						?>
					
							<div class="col-md-4 col-sm-6 col-xs-12 element-item <?php echo $on_draught; ?>">
								<div class="item-img">
									<?php the_post_thumbnail() ; ?>
									<div class="item-img-overlay">
										<div class="overlay-info full-width">
											<p><?php the_title(); ?></p>
											<h5><?php the_content() ; ?></h5>
											
											<a href="<?php echo esc_url(wp_get_attachment_url($wordimg_ID)); ?>" data-lightbox="images">
												<span class="icon"><i class="ti-arrow-right"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
					
						<?php 
						
						endif;
						
						?>
						<?php endwhile;
						
						endif
						?>
						</div>
						
						<div class="port_content_button text-center">
							<a href="<?php echo $settings['work_link'] ['url']?>" class='btn btn-default main_btn'><?php echo $settings['works_btn']?></a>
						</div>
					</div>
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
