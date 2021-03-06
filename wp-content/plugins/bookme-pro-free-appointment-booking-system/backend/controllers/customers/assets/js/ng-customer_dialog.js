;(function() {
    angular.module('customerDialog', ['ui.date']).directive('customerDialog', function() {
        return {
            restrict : 'A',
            replace  : true,
            scope    : {
                callback : '&customerDialog',
                form     : '=customer'
            },
            templateUrl : 'bookme-pro-customer-dialog.tpl',
            // The linking function will add behavior to the template.
            link: function(scope, element, attrs) {
                // Init properties.
                // Form fields.
                if (!scope.form) {
                    scope.form = {
                        id         : '',
                        wp_user_id : '',
                        full_name  : '',
                        first_name : '',
                        last_name  : '',
                        phone      : '',
                        email      : '',
                        notes      : '',
                        birthday   : ''
                    };
                }
                // Form errors.
                scope.errors = {
                    name: {required: false}
                };
                scope.$watch('form', function(newValue, oldValue) {
                    if (newValue.name) {
                        scope.errors.name.required = false;
                    }
                });
                // Loading indicator.
                scope.loading = false;

                // Init intlTelInput.
                if (BookmeProL10nCustDialog.intlTelInput.enabled) {
                    element.find('#phone').intlTelInput({
                        preferredCountries: [BookmeProL10nCustDialog.intlTelInput.country],
                        initialCountry: BookmeProL10nCustDialog.intlTelInput.country,
                        geoIpLookup: function (callback) {
                            jQuery.get('https://ipinfo.io', function() {}, 'jsonp').always(function(resp) {
                                var countryCode = (resp && resp.country) ? resp.country : '';
                                callback(countryCode);
                            });
                        },
                        utilsScript: BookmeProL10nCustDialog.intlTelInput.utils
                    });
                }

                // Do stuff on modal hide.
                element.on('sidePanel.hide', function () {
                    // Fix scroll issues when another modal is shown.
                    if (jQuery('.slidePanel-wrapper').length > 1) {
                        jQuery('body').css('overflow-y', 'hidden');
                    }
                });

                /**
                 * Send form to server.
                 */
                scope.processForm = function() {
                    scope.errors  = {};
                    scope.loading = true;
                    scope.form.phone = BookmeProL10nCustDialog.intlTelInput.enabled
                        ? element.find('#phone').intlTelInput('getNumber')
                        : element.find('#phone').val();
                    jQuery.ajax({
                        url  : ajaxurl,
                        type : 'POST',
                        data : jQuery.extend({ action : 'bookme_pro_save_customer', csrf_token : BookmeProL10nCustDialog.csrf_token }, scope.form),
                        dataType : 'json',
                        success : function ( response ) {
                            scope.$apply(function(scope) {
                                if (response.success) {
                                    response.customer.custom_fields = [];
                                    response.customer.extras = [];
                                    response.customer.status = BookmeProL10nCustDialog.default_status;
                                    // Send new customer to the parent scope.
                                    scope.callback({customer : response.customer});
                                    scope.form = {
                                        id         : '',
                                        wp_user_id : '',
                                        full_name  : '',
                                        first_name : '',
                                        last_name  : '',
                                        phone      : '',
                                        email      : '',
                                        notes      : '',
                                        birthday   : ''
                                    };
                                    // Close the dialog.
                                    hideSidepanel(element);
                                    element.modal('hide');
                                } else {
                                    // Set errors.
                                    jQuery.each(response.errors, function(field, errors) {
                                        scope.errors[field] = {};
                                        jQuery.each(errors, function(key, error) {
                                            scope.errors[field][error] = true;
                                        });
                                    });
                                }
                                scope.loading = false;
                            });
                        },
                        error : function() {
                            scope.$apply(function(scope) {
                                scope.loading = false;
                            });
                        }
                    });
                };

                /**
                 * Datepicker options.
                 */
                scope.dateOptions = BookmeProL10nCustDialog.dateOptions;
            }
        };
    });

})();