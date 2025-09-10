<?php
namespace BAddon\BAE;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Box_Shadow;

/**
 * Common Settings Render
 *
 * @package BAE
 */

trait BAE_Common_Settings_Render {

    /**
     * Text Common Settings
     *
     * @access public
     */
    public function bae_text_common_styles_render( $id = '', $label = '', $condition = [], $selector = '', $default = '' ) {
        $this->start_controls_section(
			'section_'. $id .'_style',
			[
				'label' => esc_html__( $label, 'b-addon' ),
				'tab'   => Controls_Manager::TAB_STYLE,
				'condition' => $condition
			]
		);

		$this->add_control(
			$id .'_color',
			[
				'label' => esc_html__( 'Text Color', 'b-addon' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} '.$selector => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => $id .'_typography',
				'selector' => '{{WRAPPER}} '.$selector,
			]
		);
		$this->add_control(
			$id .'_margin',
			[
				'label' => esc_html__( 'Margin', 'b-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} '.$selector => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			$id .'_padding',
			[
				'label' => esc_html__( 'Padding', 'b-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} '.$selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
    }

    /**
     * Button Common Settings
     *
     * @access public
     */
    public function bae_button_common_styles_render( $id = '', $label = '', $condition = [], $selector = '', $default = '' ) {
        $this->start_controls_section(
			'section_'. $id .'_style',
			[
				'label' => esc_html__( $label, 'b-addon' ),
				'tab'   => Controls_Manager::TAB_STYLE,
				'condition' => $condition
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => $id .'_typography',
				'selector' => '{{WRAPPER}} '.$selector,
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => $id .'_typography',
				'selector' => '{{WRAPPER}} '.$selector,
			]
		);

		$this->start_controls_tabs( $id .'_style_tabs' );

		$this->start_controls_tab(
			$id .'_style_normal',
			[
				'label' => esc_html__( 'Normal', 'b-addon' ),
			]
		);

		$this->add_control(
			$id .'_text_color',
			[
				'label' => esc_html__( 'Text Color', 'b-addon' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} '.$selector => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			$id .'_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'b-addon' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} '.$selector => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => $id .'_border',
				'selector' => '{{WRAPPER}} '.$selector,
			]
		);

		$this->add_control(
			$id .'_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'b-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} '.$selector => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			$id .'_style_hover',
			[
				'label' => esc_html__( 'Hover', 'b-addon' ),
			]
		);

		$this->add_control(
			$id .'_text_color_hover',
			[
				'label' => esc_html__( 'Text Color', 'b-addon' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} '.$selector.':hover' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			$id .'_bg_color_hover',
			[
				'label' => esc_html__( 'Background Color', 'b-addon' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} '.$selector.':hover' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => $id .'_border_hover',
				'selector' => '{{WRAPPER}} '.$selector.':hover',
			]
		);

		$this->add_control(
			$id .'_border_radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'b-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} '.$selector.':hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_control(
			$id .'_margin',
			[
				'label' => esc_html__( 'Margin', 'b-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} '.$selector => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			$id .'_padding',
			[
				'label' => esc_html__( 'Padding', 'b-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} '.$selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => $id .'_box_shadow',
				'selector' => '{{WRAPPER}} '.$selector,
			]
		);
		
		$this->end_controls_section();
    }

    /**
     * Box Common Settings
     *
     * @access public
     */
    public function bae_box_common_styles_render( $id = '', $label = '', $condition = [], $selector = '' ) {
        $this->start_controls_section(
            'section_'. $id .'_style',
            [
                'label'     => esc_html__( $label, 'b-addon' ),
                'tab'       => Controls_Manager::TAB_STYLE,
                'condition' => $condition,
            ]
        );

        // Border
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => $id .'_border',
                'selector' => '{{WRAPPER}} ' . $selector,
            ]
        );

        // Border Radius
        $this->add_control(
            $id .'_border_radius',
            [
                'label'      => esc_html__( 'Border Radius', 'b-addon' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors'  => [
                    '{{WRAPPER}} ' . $selector => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        // Box Shadow
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name'     => $id .'_box_shadow',
                'selector' => '{{WRAPPER}} ' . $selector,
            ]
        );

        // Padding
        $this->add_control(
            $id .'_padding',
            [
                'label'      => esc_html__( 'Padding', 'b-addon' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors'  => [
                    '{{WRAPPER}} ' . $selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        // Margin
        $this->add_control(
            $id .'_margin',
            [
                'label'      => esc_html__( 'Margin', 'b-addon' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors'  => [
                    '{{WRAPPER}} ' . $selector => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }


}

?>