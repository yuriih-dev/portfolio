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
class News_area extends Widget_Base {

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
		return 'news-area';
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
		return __( 'Dekha News', 'elementor-dekha' );
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
		return 'eicon-pencil';
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
			'news_list',
			[
				'label' => __( 'Content', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
		$this->add_control(
			'news_num',
			[
				'label' => __( 'Post per page', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '3', 'elementor-dekha' ),
				'placeholder' => __( 'Type your number here', 'elementor-dekha' ),
			]
		);
		$this->add_control(
			'news_btn',
			[
				'label' => __( 'Button title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Read more', 'elementor-dekha' ),
				'placeholder' => __( 'Type your number here', 'elementor-dekha' ),
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'news_clr',
			[
				'label' => __( 'Color', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_control(
			'newsa_iclr',
			[
				'label' => __( 'Date', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .blog-thumb small' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'newtsa_iclr',
			[
				'label' => __( 'Title', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .news-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'newsa_iclsrcat',
			[
				'label' => __( 'Category', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .cata' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'newsa_icdeslrcatp',
			[
				'label' => __( 'Description', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .blog-info p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'newsa_iclbtnrcatp',
			[
				'label' => __( 'Button', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .bt' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'newsa_iclrchoveratp',
			[
				'label' => __( 'Button hover', 'elementor-dekha' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .bt:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'news_typo',
			[
				'label' => __( 'Typography', 'elementor-dekha' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'nw_typography',
				'label' => __( 'Date', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .blog-thumb small',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'nwc_typography',
				'label' => __( 'Category', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .cata',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'nwt_typography',
				'label' => __( 'title', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .news-title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'nwd_typography',
				'label' => __( 'Description', 'elementor-dekha' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .blog-info p',
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
		$post_per_page = $settings['news_num'];
        ?>

		
            
			<section id="blog">
				<div class="container">
					<div class="row">
					<?php
						
						$catn = get_categories(
							array(
								'offset'	=> 1,
							)
						);

						foreach ($catn as $catnews){
							$aregs = array(
								'posts_per_page'	=> $post_per_page,
								'category__in'		=>	array($catnews->term_id),
							);
						}

						$query = new \WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => $post_per_page,
						));

						if($query -> have_posts()):
							while($query -> have_posts()) : $query -> the_post();

							
						?>

				
					
						<div class="blog_slide_area">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="single_blog">
									<div class="blog-thumb">
										<div class="blog-image">

										   <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
										</div>
										<div class="blog-info">
											<small><i class="fa fa-clock-o"></i><?php the_time('F j, Y') ; ?></small>

											<a href="<?php the_permalink(); ?>"><span class="cata">| <?php echo $catnews->name; ?></span></a>
											<a href="<?php the_permalink(); ?>"><h4 class="news-title"><?php the_title() ; ?></h4></a>
											<p><?php echo wp_trim_words( get_the_content(), 13);?></p>
											<a href="<?php the_permalink(); ?>" class="btn bt btn-default blog_btn main_btn"><?php echo $settings['news_btn']; ?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					
						<?php endwhile; ?>
					
					<?php endif; ?>
					</div>
				</div>
			</section>
		<!-- END BLOG -->
		
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
