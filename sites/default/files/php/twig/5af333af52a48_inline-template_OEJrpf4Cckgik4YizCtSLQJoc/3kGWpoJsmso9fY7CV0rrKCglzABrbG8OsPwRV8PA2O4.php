<?php

/* {# inline_template_start #}        <link href="https://plugins.tawk.to/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                <iframe id="tawkIframe" src="" style="min-height: 275px; width : 100%; border: none; margin: 5px 0; padding: 10px; background: #FFF;"></iframe>

        <input type="hidden" class="hidden" name="page_id" value="">
        <input type="hidden" class="hidden" name="widget_id" value="">
        <div id="content" class="bootstrap" style="margin-top: -20px;">
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <form id="module_form" class="form-horizontal" action="" method="post">
                        <div class="panel panel-default" id="fieldset_1">
                            <div class="form-group col-lg-12">
                                <div class="panel-heading"><strong>Visibility Settings</strong></div>
                            </div>
                            <br>
                            <div class="form-group col-lg-12">
                                <label for="always_display" class="col-lg-6 control-label">Always show Tawk.To widget on every page</label>
                                <div class="col-lg-6 control-label ">
                                                                        <input type="checkbox" class="col-lg-6" name="always_display" id="always_display" value="1" 
                                        checked />
                                </div>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="hide_oncustom" class="col-lg-6 control-label">Except on pages:</label>
                                <div class="col-lg-6 control-label">
                                                                                                                    <textarea class="form-control hide_specific" name="hide_oncustom" 
                                            id="hide_oncustom" cols="30" rows="10">
</textarea>
                                                                        <br>
                                    <p style="text-align: justify;">
                                    Add URLs to pages in which you would like to hide the widget. ( if "always show" is checked )<br>
                                    Put each URL in a new line.
                                    </p>
                                </div>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="show_onfrontpage" class="col-lg-6 control-label">Show on frontpage</label>
                                <div class="col-lg-6 control-label ">
                                                                        <input type="checkbox" class="col-lg-6 show_specific" name="show_onfrontpage" 
                                        id="show_onfrontpage" value="1" 
                                         />
                                </div>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                <label for="show_oncategory" class="col-lg-6 control-label">Show on category pages</label>
                                <div class="col-lg-6 control-label ">
                                                                        <input type="checkbox" class="col-lg-6 show_specific" name="show_oncategory" id="show_oncategory" value="1" 
                                          />
                                </div>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                <label for="show_oncustom" class="col-lg-6 control-label">Show on pages:</label>
                                <div class="col-lg-6 control-label">
                                                                            <textarea class="form-control show_specific" name="show_oncustom" id="show_oncustom" cols="30" rows="10"></textarea>
                                                                        <br>
                                    <p style="text-align: justify;">
                                    Add URLs to pages in which you would like to show the widget.<br>
                                    Put each URL in a new line.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer" style="position: relative; overflow: hidden; width: 100%; padding: 5px 0;">
                            <div id="optionsSuccessMessage" style="position:absolute;top:0;left;0;background-color: #dff0d8; color: #3c763d; border-color: #d6e9c6; font-weight: bold; display: none;" class="alert alert-success col-lg-5">Successfully set widget options to your site</div>
                            <label for="show_oncustom" class="col-lg-6 control-label"></label>
                            <div class="form-group">
                                <button type="submit" value="1" id="module_form_submit_btn" name="submitBlockCategories" class="btn btn-default pull-right"><i class="process-icon-save"></i> Save</button>    
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        <script>
        var currentHost = window.location.protocol + "//" + window.location.host;
        var url = "https://plugins.tawk.to/generic/widgets?currentWidgetId=&currentPageId=&parentDomain=" + currentHost;

        jQuery("#tawkIframe").attr("src", url);

        var iframe = jQuery("#tawk_widget_customization")[0];

        window.addEventListener("message", function(e) {
        if(e.origin === "https://plugins.tawk.to") {
            if(e.data.action === "setWidget") {
                setWidget(e);
            }
            if(e.data.action === "removeWidget") {
                removeWidget(e);
            }
        }
        });

        function setWidget(e) {
            jQuery.post("/prits/admin/config/tawk_to/set_widget", {
                pid : e.data.pageId,
                wid : e.data.widgetId
            }, function(r) {
                if(r.success) {
                    $('#widget_already_set').hide();
                    e.source.postMessage({action: "setDone"}, "https://plugins.tawk.to");
                } else {
                    e.source.postMessage({action: "setFail"}, "https://plugins.tawk.to");
                }
            });
        }

        function removeWidget(e) {
            jQuery.post("/prits/admin/config/tawk_to/remove_widget", function(r) {
            if(r.success) {
                $('#widget_already_set').hide();
                e.source.postMessage({action: "removeDone"}, "https://plugins.tawk.to");
            } else {
                e.source.postMessage({action: "removeFail"}, "https://plugins.tawk.to");
            }
            });
        }

        jQuery(document).ready(function() {
            if (jQuery("#always_display").prop("checked")){
                jQuery('.show_specific').prop('disabled', true);
            } else {
                jQuery('.hide_specific').prop('disabled', true);
            }

            jQuery("#always_display").change(function() {
                if(this.checked){
                    jQuery('.hide_specific').prop('disabled', false);
                    jQuery('.show_specific').prop('disabled', true);
                }else{
                    jQuery('.hide_specific').prop('disabled', true);
                    jQuery('.show_specific').prop('disabled', false);
                }
            });

            // process the form
            jQuery('#module_form').submit(function(event) {
                $path = "/prits/admin/config/tawk_to/set_options";
                jQuery.post($path, {
                    action     : 'set_visibility',
                    ajax       : true,
                    page_id    : jQuery('input[name="page_id"]').val(),
                    widget_id  : jQuery('input[name="widget_id"]').val(),
                    options    : jQuery(this).serialize()
                }, function(r) {
                    if(r.success) {
                        $('#optionsSuccessMessage').toggle().delay(3000).fadeOut();
                    }
                });

                // stop the form from submitting the normal way and refreshing the page
                event.preventDefault();
            });
        });
        </script>
         */
class __TwigTemplate_99cff58a1ff93c371e498b5e13ba6842ca7acba48fd51992d143c54f7a6b2862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "        <link href=\"https://plugins.tawk.to/public/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
                <iframe id=\"tawkIframe\" src=\"\" style=\"min-height: 275px; width : 100%; border: none; margin: 5px 0; padding: 10px; background: #FFF;\"></iframe>

        <input type=\"hidden\" class=\"hidden\" name=\"page_id\" value=\"\">
        <input type=\"hidden\" class=\"hidden\" name=\"widget_id\" value=\"\">
        <div id=\"content\" class=\"bootstrap\" style=\"margin-top: -20px;\">
            <hr>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <form id=\"module_form\" class=\"form-horizontal\" action=\"\" method=\"post\">
                        <div class=\"panel panel-default\" id=\"fieldset_1\">
                            <div class=\"form-group col-lg-12\">
                                <div class=\"panel-heading\"><strong>Visibility Settings</strong></div>
                            </div>
                            <br>
                            <div class=\"form-group col-lg-12\">
                                <label for=\"always_display\" class=\"col-lg-6 control-label\">Always show Tawk.To widget on every page</label>
                                <div class=\"col-lg-6 control-label \">
                                                                        <input type=\"checkbox\" class=\"col-lg-6\" name=\"always_display\" id=\"always_display\" value=\"1\" 
                                        checked />
                                </div>
                            </div>

                            <div class=\"form-group col-lg-12\">
                                <label for=\"hide_oncustom\" class=\"col-lg-6 control-label\">Except on pages:</label>
                                <div class=\"col-lg-6 control-label\">
                                                                                                                    <textarea class=\"form-control hide_specific\" name=\"hide_oncustom\" 
                                            id=\"hide_oncustom\" cols=\"30\" rows=\"10\">
</textarea>
                                                                        <br>
                                    <p style=\"text-align: justify;\">
                                    Add URLs to pages in which you would like to hide the widget. ( if \"always show\" is checked )<br>
                                    Put each URL in a new line.
                                    </p>
                                </div>
                            </div>

                            <div class=\"form-group col-lg-12\">
                                <label for=\"show_onfrontpage\" class=\"col-lg-6 control-label\">Show on frontpage</label>
                                <div class=\"col-lg-6 control-label \">
                                                                        <input type=\"checkbox\" class=\"col-lg-6 show_specific\" name=\"show_onfrontpage\" 
                                        id=\"show_onfrontpage\" value=\"1\" 
                                         />
                                </div>
                            </div>
                            
                            <div class=\"form-group col-lg-12\">
                                <label for=\"show_oncategory\" class=\"col-lg-6 control-label\">Show on category pages</label>
                                <div class=\"col-lg-6 control-label \">
                                                                        <input type=\"checkbox\" class=\"col-lg-6 show_specific\" name=\"show_oncategory\" id=\"show_oncategory\" value=\"1\" 
                                          />
                                </div>
                            </div>
                            
                            <div class=\"form-group col-lg-12\">
                                <label for=\"show_oncustom\" class=\"col-lg-6 control-label\">Show on pages:</label>
                                <div class=\"col-lg-6 control-label\">
                                                                            <textarea class=\"form-control show_specific\" name=\"show_oncustom\" id=\"show_oncustom\" cols=\"30\" rows=\"10\"></textarea>
                                                                        <br>
                                    <p style=\"text-align: justify;\">
                                    Add URLs to pages in which you would like to show the widget.<br>
                                    Put each URL in a new line.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel-footer\" style=\"position: relative; overflow: hidden; width: 100%; padding: 5px 0;\">
                            <div id=\"optionsSuccessMessage\" style=\"position:absolute;top:0;left;0;background-color: #dff0d8; color: #3c763d; border-color: #d6e9c6; font-weight: bold; display: none;\" class=\"alert alert-success col-lg-5\">Successfully set widget options to your site</div>
                            <label for=\"show_oncustom\" class=\"col-lg-6 control-label\"></label>
                            <div class=\"form-group\">
                                <button type=\"submit\" value=\"1\" id=\"module_form_submit_btn\" name=\"submitBlockCategories\" class=\"btn btn-default pull-right\"><i class=\"process-icon-save\"></i> Save</button>    
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div class=\"col-lg-4\"></div>
            </div>
        </div>
        <script>
        var currentHost = window.location.protocol + \"//\" + window.location.host;
        var url = \"https://plugins.tawk.to/generic/widgets?currentWidgetId=&currentPageId=&parentDomain=\" + currentHost;

        jQuery(\"#tawkIframe\").attr(\"src\", url);

        var iframe = jQuery(\"#tawk_widget_customization\")[0];

        window.addEventListener(\"message\", function(e) {
        if(e.origin === \"https://plugins.tawk.to\") {
            if(e.data.action === \"setWidget\") {
                setWidget(e);
            }
            if(e.data.action === \"removeWidget\") {
                removeWidget(e);
            }
        }
        });

        function setWidget(e) {
            jQuery.post(\"/prits/admin/config/tawk_to/set_widget\", {
                pid : e.data.pageId,
                wid : e.data.widgetId
            }, function(r) {
                if(r.success) {
                    \$('#widget_already_set').hide();
                    e.source.postMessage({action: \"setDone\"}, \"https://plugins.tawk.to\");
                } else {
                    e.source.postMessage({action: \"setFail\"}, \"https://plugins.tawk.to\");
                }
            });
        }

        function removeWidget(e) {
            jQuery.post(\"/prits/admin/config/tawk_to/remove_widget\", function(r) {
            if(r.success) {
                \$('#widget_already_set').hide();
                e.source.postMessage({action: \"removeDone\"}, \"https://plugins.tawk.to\");
            } else {
                e.source.postMessage({action: \"removeFail\"}, \"https://plugins.tawk.to\");
            }
            });
        }

        jQuery(document).ready(function() {
            if (jQuery(\"#always_display\").prop(\"checked\")){
                jQuery('.show_specific').prop('disabled', true);
            } else {
                jQuery('.hide_specific').prop('disabled', true);
            }

            jQuery(\"#always_display\").change(function() {
                if(this.checked){
                    jQuery('.hide_specific').prop('disabled', false);
                    jQuery('.show_specific').prop('disabled', true);
                }else{
                    jQuery('.hide_specific').prop('disabled', true);
                    jQuery('.show_specific').prop('disabled', false);
                }
            });

            // process the form
            jQuery('#module_form').submit(function(event) {
                \$path = \"/prits/admin/config/tawk_to/set_options\";
                jQuery.post(\$path, {
                    action     : 'set_visibility',
                    ajax       : true,
                    page_id    : jQuery('input[name=\"page_id\"]').val(),
                    widget_id  : jQuery('input[name=\"widget_id\"]').val(),
                    options    : jQuery(this).serialize()
                }, function(r) {
                    if(r.success) {
                        \$('#optionsSuccessMessage').toggle().delay(3000).fadeOut();
                    }
                });

                // stop the form from submitting the normal way and refreshing the page
                event.preventDefault();
            });
        });
        </script>
        ";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}        <link href=\"https://plugins.tawk.to/public/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
                <iframe id=\"tawkIframe\" src=\"\" style=\"min-height: 275px; width : 100%; border: none; margin: 5px 0; padding: 10px; background: #FFF;\"></iframe>

        <input type=\"hidden\" class=\"hidden\" name=\"page_id\" value=\"\">
        <input type=\"hidden\" class=\"hidden\" name=\"widget_id\" value=\"\">
        <div id=\"content\" class=\"bootstrap\" style=\"margin-top: -20px;\">
            <hr>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <form id=\"module_form\" class=\"form-horizontal\" action=\"\" method=\"post\">
                        <div class=\"panel panel-default\" id=\"fieldset_1\">
                            <div class=\"form-group col-lg-12\">
                                <div class=\"panel-heading\"><strong>Visibility Settings</strong></div>
                            </div>
                            <br>
                            <div class=\"form-group col-lg-12\">
                                <label for=\"always_display\" class=\"col-lg-6 control-label\">Always show Tawk.To widget on every page</label>
                                <div class=\"col-lg-6 control-label \">
                                                                        <input type=\"checkbox\" class=\"col-lg-6\" name=\"always_display\" id=\"always_display\" value=\"1\" 
                                        checked />
                                </div>
                            </div>

                            <div class=\"form-group col-lg-12\">
                                <label for=\"hide_oncustom\" class=\"col-lg-6 control-label\">Except on pages:</label>
                                <div class=\"col-lg-6 control-label\">
                                                                                                                    <textarea class=\"form-control hide_specific\" name=\"hide_oncustom\" 
                                            id=\"hide_oncustom\" cols=\"30\" rows=\"10\">
</textarea>
                                                                        <br>
                                    <p style=\"text-align: justify;\">
                                    Add URLs to pages in which you would like to hide the widget. ( if \"always show\" is checked )<br>
                                    Put each URL in a new line.
                                    </p>
                                </div>
                            </div>

                            <div class=\"form-group col-lg-12\">
                                <label for=\"show_onfrontpage\" class=\"col-lg-6 control-label\">Show on frontpage</label>
                                <div class=\"col-lg-6 control-label \">
                                                                        <input type=\"checkbox\" class=\"col-lg-6 show_specific\" name=\"show_onfrontpage\" 
                                        id=\"show_onfrontpage\" value=\"1\" 
                                         />
                                </div>
                            </div>
                            
                            <div class=\"form-group col-lg-12\">
                                <label for=\"show_oncategory\" class=\"col-lg-6 control-label\">Show on category pages</label>
                                <div class=\"col-lg-6 control-label \">
                                                                        <input type=\"checkbox\" class=\"col-lg-6 show_specific\" name=\"show_oncategory\" id=\"show_oncategory\" value=\"1\" 
                                          />
                                </div>
                            </div>
                            
                            <div class=\"form-group col-lg-12\">
                                <label for=\"show_oncustom\" class=\"col-lg-6 control-label\">Show on pages:</label>
                                <div class=\"col-lg-6 control-label\">
                                                                            <textarea class=\"form-control show_specific\" name=\"show_oncustom\" id=\"show_oncustom\" cols=\"30\" rows=\"10\"></textarea>
                                                                        <br>
                                    <p style=\"text-align: justify;\">
                                    Add URLs to pages in which you would like to show the widget.<br>
                                    Put each URL in a new line.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel-footer\" style=\"position: relative; overflow: hidden; width: 100%; padding: 5px 0;\">
                            <div id=\"optionsSuccessMessage\" style=\"position:absolute;top:0;left;0;background-color: #dff0d8; color: #3c763d; border-color: #d6e9c6; font-weight: bold; display: none;\" class=\"alert alert-success col-lg-5\">Successfully set widget options to your site</div>
                            <label for=\"show_oncustom\" class=\"col-lg-6 control-label\"></label>
                            <div class=\"form-group\">
                                <button type=\"submit\" value=\"1\" id=\"module_form_submit_btn\" name=\"submitBlockCategories\" class=\"btn btn-default pull-right\"><i class=\"process-icon-save\"></i> Save</button>    
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div class=\"col-lg-4\"></div>
            </div>
        </div>
        <script>
        var currentHost = window.location.protocol + \"//\" + window.location.host;
        var url = \"https://plugins.tawk.to/generic/widgets?currentWidgetId=&currentPageId=&parentDomain=\" + currentHost;

        jQuery(\"#tawkIframe\").attr(\"src\", url);

        var iframe = jQuery(\"#tawk_widget_customization\")[0];

        window.addEventListener(\"message\", function(e) {
        if(e.origin === \"https://plugins.tawk.to\") {
            if(e.data.action === \"setWidget\") {
                setWidget(e);
            }
            if(e.data.action === \"removeWidget\") {
                removeWidget(e);
            }
        }
        });

        function setWidget(e) {
            jQuery.post(\"/prits/admin/config/tawk_to/set_widget\", {
                pid : e.data.pageId,
                wid : e.data.widgetId
            }, function(r) {
                if(r.success) {
                    \$('#widget_already_set').hide();
                    e.source.postMessage({action: \"setDone\"}, \"https://plugins.tawk.to\");
                } else {
                    e.source.postMessage({action: \"setFail\"}, \"https://plugins.tawk.to\");
                }
            });
        }

        function removeWidget(e) {
            jQuery.post(\"/prits/admin/config/tawk_to/remove_widget\", function(r) {
            if(r.success) {
                \$('#widget_already_set').hide();
                e.source.postMessage({action: \"removeDone\"}, \"https://plugins.tawk.to\");
            } else {
                e.source.postMessage({action: \"removeFail\"}, \"https://plugins.tawk.to\");
            }
            });
        }

        jQuery(document).ready(function() {
            if (jQuery(\"#always_display\").prop(\"checked\")){
                jQuery('.show_specific').prop('disabled', true);
            } else {
                jQuery('.hide_specific').prop('disabled', true);
            }

            jQuery(\"#always_display\").change(function() {
                if(this.checked){
                    jQuery('.hide_specific').prop('disabled', false);
                    jQuery('.show_specific').prop('disabled', true);
                }else{
                    jQuery('.hide_specific').prop('disabled', true);
                    jQuery('.show_specific').prop('disabled', false);
                }
            });

            // process the form
            jQuery('#module_form').submit(function(event) {
                \$path = \"/prits/admin/config/tawk_to/set_options\";
                jQuery.post(\$path, {
                    action     : 'set_visibility',
                    ajax       : true,
                    page_id    : jQuery('input[name=\"page_id\"]').val(),
                    widget_id  : jQuery('input[name=\"widget_id\"]').val(),
                    options    : jQuery(this).serialize()
                }, function(r) {
                    if(r.success) {
                        \$('#optionsSuccessMessage').toggle().delay(3000).fadeOut();
                    }
                });

                // stop the form from submitting the normal way and refreshing the page
                event.preventDefault();
            });
        });
        </script>
        ";
    }

    public function getDebugInfo()
    {
        return array (  204 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}        <link href=\"https://plugins.tawk.to/public/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
                <iframe id=\"tawkIframe\" src=\"\" style=\"min-height: 275px; width : 100%; border: none; margin: 5px 0; padding: 10px; background: #FFF;\"></iframe>

        <input type=\"hidden\" class=\"hidden\" name=\"page_id\" value=\"\">
        <input type=\"hidden\" class=\"hidden\" name=\"widget_id\" value=\"\">
        <div id=\"content\" class=\"bootstrap\" style=\"margin-top: -20px;\">
            <hr>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <form id=\"module_form\" class=\"form-horizontal\" action=\"\" method=\"post\">
                        <div class=\"panel panel-default\" id=\"fieldset_1\">
                            <div class=\"form-group col-lg-12\">
                                <div class=\"panel-heading\"><strong>Visibility Settings</strong></div>
                            </div>
                            <br>
                            <div class=\"form-group col-lg-12\">
                                <label for=\"always_display\" class=\"col-lg-6 control-label\">Always show Tawk.To widget on every page</label>
                                <div class=\"col-lg-6 control-label \">
                                                                        <input type=\"checkbox\" class=\"col-lg-6\" name=\"always_display\" id=\"always_display\" value=\"1\" 
                                        checked />
                                </div>
                            </div>

                            <div class=\"form-group col-lg-12\">
                                <label for=\"hide_oncustom\" class=\"col-lg-6 control-label\">Except on pages:</label>
                                <div class=\"col-lg-6 control-label\">
                                                                                                                    <textarea class=\"form-control hide_specific\" name=\"hide_oncustom\" 
                                            id=\"hide_oncustom\" cols=\"30\" rows=\"10\">
</textarea>
                                                                        <br>
                                    <p style=\"text-align: justify;\">
                                    Add URLs to pages in which you would like to hide the widget. ( if \"always show\" is checked )<br>
                                    Put each URL in a new line.
                                    </p>
                                </div>
                            </div>

                            <div class=\"form-group col-lg-12\">
                                <label for=\"show_onfrontpage\" class=\"col-lg-6 control-label\">Show on frontpage</label>
                                <div class=\"col-lg-6 control-label \">
                                                                        <input type=\"checkbox\" class=\"col-lg-6 show_specific\" name=\"show_onfrontpage\" 
                                        id=\"show_onfrontpage\" value=\"1\" 
                                         />
                                </div>
                            </div>
                            
                            <div class=\"form-group col-lg-12\">
                                <label for=\"show_oncategory\" class=\"col-lg-6 control-label\">Show on category pages</label>
                                <div class=\"col-lg-6 control-label \">
                                                                        <input type=\"checkbox\" class=\"col-lg-6 show_specific\" name=\"show_oncategory\" id=\"show_oncategory\" value=\"1\" 
                                          />
                                </div>
                            </div>
                            
                            <div class=\"form-group col-lg-12\">
                                <label for=\"show_oncustom\" class=\"col-lg-6 control-label\">Show on pages:</label>
                                <div class=\"col-lg-6 control-label\">
                                                                            <textarea class=\"form-control show_specific\" name=\"show_oncustom\" id=\"show_oncustom\" cols=\"30\" rows=\"10\"></textarea>
                                                                        <br>
                                    <p style=\"text-align: justify;\">
                                    Add URLs to pages in which you would like to show the widget.<br>
                                    Put each URL in a new line.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel-footer\" style=\"position: relative; overflow: hidden; width: 100%; padding: 5px 0;\">
                            <div id=\"optionsSuccessMessage\" style=\"position:absolute;top:0;left;0;background-color: #dff0d8; color: #3c763d; border-color: #d6e9c6; font-weight: bold; display: none;\" class=\"alert alert-success col-lg-5\">Successfully set widget options to your site</div>
                            <label for=\"show_oncustom\" class=\"col-lg-6 control-label\"></label>
                            <div class=\"form-group\">
                                <button type=\"submit\" value=\"1\" id=\"module_form_submit_btn\" name=\"submitBlockCategories\" class=\"btn btn-default pull-right\"><i class=\"process-icon-save\"></i> Save</button>    
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div class=\"col-lg-4\"></div>
            </div>
        </div>
        <script>
        var currentHost = window.location.protocol + \"//\" + window.location.host;
        var url = \"https://plugins.tawk.to/generic/widgets?currentWidgetId=&currentPageId=&parentDomain=\" + currentHost;

        jQuery(\"#tawkIframe\").attr(\"src\", url);

        var iframe = jQuery(\"#tawk_widget_customization\")[0];

        window.addEventListener(\"message\", function(e) {
        if(e.origin === \"https://plugins.tawk.to\") {
            if(e.data.action === \"setWidget\") {
                setWidget(e);
            }
            if(e.data.action === \"removeWidget\") {
                removeWidget(e);
            }
        }
        });

        function setWidget(e) {
            jQuery.post(\"/prits/admin/config/tawk_to/set_widget\", {
                pid : e.data.pageId,
                wid : e.data.widgetId
            }, function(r) {
                if(r.success) {
                    \$('#widget_already_set').hide();
                    e.source.postMessage({action: \"setDone\"}, \"https://plugins.tawk.to\");
                } else {
                    e.source.postMessage({action: \"setFail\"}, \"https://plugins.tawk.to\");
                }
            });
        }

        function removeWidget(e) {
            jQuery.post(\"/prits/admin/config/tawk_to/remove_widget\", function(r) {
            if(r.success) {
                \$('#widget_already_set').hide();
                e.source.postMessage({action: \"removeDone\"}, \"https://plugins.tawk.to\");
            } else {
                e.source.postMessage({action: \"removeFail\"}, \"https://plugins.tawk.to\");
            }
            });
        }

        jQuery(document).ready(function() {
            if (jQuery(\"#always_display\").prop(\"checked\")){
                jQuery('.show_specific').prop('disabled', true);
            } else {
                jQuery('.hide_specific').prop('disabled', true);
            }

            jQuery(\"#always_display\").change(function() {
                if(this.checked){
                    jQuery('.hide_specific').prop('disabled', false);
                    jQuery('.show_specific').prop('disabled', true);
                }else{
                    jQuery('.hide_specific').prop('disabled', true);
                    jQuery('.show_specific').prop('disabled', false);
                }
            });

            // process the form
            jQuery('#module_form').submit(function(event) {
                \$path = \"/prits/admin/config/tawk_to/set_options\";
                jQuery.post(\$path, {
                    action     : 'set_visibility',
                    ajax       : true,
                    page_id    : jQuery('input[name=\"page_id\"]').val(),
                    widget_id  : jQuery('input[name=\"widget_id\"]').val(),
                    options    : jQuery(this).serialize()
                }, function(r) {
                    if(r.success) {
                        \$('#optionsSuccessMessage').toggle().delay(3000).fadeOut();
                    }
                });

                // stop the form from submitting the normal way and refreshing the page
                event.preventDefault();
            });
        });
        </script>
        ", "");
    }
}
