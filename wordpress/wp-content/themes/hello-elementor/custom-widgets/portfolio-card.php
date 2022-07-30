<?php
namespace Elementor;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Portfolio_Card extends Widget_Base { 
    public function get_name() 
    {
	    return 'Porfolio-card';
    }

    public function get_title() 
    {
	    return 'Porfolio Card';
    }

    public function get_categories() 
    {
	    return [ 'general' ];
    }

    public function get_keywords() 
    {
	    return [ 'card' ];
    }

    protected function register_controls() 
    { 
	    $this->start_controls_section(
            'content_section',
            [
                'label' => ( 'Content' ),
            ]
        );

        $this->add_control(
            'card_title',
            [
            'label' => __( 'Card title', 'elementor' ),
            'type' => Controls_Manager::TEXT,
            'label_block' => true,
            'placeholder' => ( 'Your card title here' ),
            ]
        );

        $this->add_control(
			'card_description',
			[
				'label' => ( 'Card Description' ),
				'type' => Controls_Manager::TEXTAREA,
				'label_block'   => true,
				'placeholder' => ( 'Your card description here' ),
			]
		);	


		$this->end_controls_section();
    }

    protected function render() 
    {
        $settings = $this->get_settings_for_display();


        $card_title = $settings['card_title'];
        $card_description = $settings['card_description'];

        ?>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
            .card
            {
                font-family: 'Poppins', sans-serif;
                text-align: center;
            }
            .card_title
            {
                color: #0083D9;
                font-weight: 500;
            }

        </style>
        <div class="card">
            <h2 class="card_title" ><?php echo $card_title; ?></h2>
            <p class= "card__description"><?php echo $card_description;  ?></p>
        </div>


        <?php
    }
}