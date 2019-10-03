add_action(
                'woocommerce_process_product_meta_simple',
                array( $this, 'on_simple_product_publish' ),
                10,  // Action priority
                1    // Args passed to on_product_publish (should be 'id')
            );

            add_action(
                'woocommerce_process_product_meta_variable',
                array( $this, 'on_variable_product_publish' ),
                10,  // Action priority
                1    // Args passed to on_product_publish (should be 'id')
            );

            add_action(
                'woocommerce_process_product_meta_booking',
                array( $this, 'on_simple_product_publish' ),
                10,  // Action priority
                1    // Args passed to on_product_publish (should be 'id')
            );

            add_action(
                'woocommerce_process_product_meta_external',
                array( $this, 'on_simple_product_publish' ),
                10,  // Action priority
                1    // Args passed to on_product_publish (should be 'id')
            );

            add_action(
                'woocommerce_process_product_meta_subscription',
                array( $this, 'on_product_publish' ),
                10,  // Action priority
                1    // Args passed to on_product_publish (should be 'id')
            );

            add_action(
                'woocommerce_process_product_meta_variable-subscription',
                array( $this, 'on_product_publish' ),
                10,  // Action priority
                1    // Args passed to on_product_publish (should be 'id')
            );
