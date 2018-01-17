<?php

/* themes/vanessa/templates/html.html.twig */
class __TwigTemplate_d398a8c2e257672e2ba1cbb9536bd10d614a095800d0c9ff9e9bc3907e95eb0a extends Twig_Template
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
        $tags = array("if" => 44);
        $filters = array("raw" => 31, "safe_join" => 32);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw', 'safe_join'),
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

        // line 28
        echo "<!DOCTYPE html>
<html";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true));
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic\" rel=\"stylesheet\" type=\"text/css\"> 
    <css-placeholder token=\"";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <script src=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/js/jquery.min.js\"></script>
  </head>
  <body>

    ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
    ";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
    ";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    ";
        // line 44
        if (($context["map_show"] ?? null)) {
            // line 45
            echo "\t\t<script>
\t\t\tvar mapLocation = new google.maps.LatLng(";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["map_latitude"] ?? null), "html", null, true));
            echo ", ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["map_longitude"] ?? null), "html", null, true));
            echo "); //change coordinates here
\t\t\tvar marker;
\t\t\tvar map;

\t\t\tfunction initialize() {
\t\t\t    var mapOptions = {
\t\t\t        zoom: 12, // Change zoom here
\t\t\t        center: mapLocation,
\t\t\t        scrollwheel: false,
\t\t\t        styles: [
\t\t\t            {\"featureType\":\"administrative\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"color\":\"#333333\"}]},
\t\t\t            {\"featureType\":\"landscape\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#f2f2f2\"}]},
\t\t\t            {\"featureType\":\"poi\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},
\t\t\t            {\"featureType\":\"poi\",\"elementType\":\"labels.text\",\"stylers\":[{\"visibility\":\"off\"}]},
\t\t\t            {\"featureType\":\"road\",\"elementType\":\"all\",\"stylers\":[{\"saturation\":-100},{\"lightness\":45}]},
\t\t\t            {\"featureType\":\"road.highway\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},
\t\t\t            {\"featureType\":\"road.arterial\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},
\t\t\t            {\"featureType\":\"transit\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},
\t\t\t            {\"featureType\":\"water\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#dbdbdb\"},{\"visibility\":\"on\"}]}]
\t\t\t    };
    
\t\t\t    map = new google.maps.Map(document.getElementById('map'),
\t\t\t    mapOptions);
    
\t\t\t    //change address details here
\t\t\t    var contentString = '<div class=\"map-info\">' 
\t\t\t    + '<div class=\"map-title\">' 
\t\t\t    + '<p class=\"map-address\">";
            // line 73
            if (($context["map_address"] ?? null)) {
                echo "<div class=\"map-address-row\"><i class=\"fa fa-map-marker\"></i><span class=\"text\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["map_address"] ?? null), "html", null, true));
                echo "</span></div>";
            }
            if (($context["map_phone"] ?? null)) {
                echo "<div class=\"map-address-row\"><i class=\"fa fa-phone\"></i><span class=\"text\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["map_phone"] ?? null), "html", null, true));
                echo "</span></div>";
            }
            echo "<div class=\"map-address-row\">";
            if (($context["map_email"] ?? null)) {
                echo "<span class=\"map-email\"><i class=\"fa fa-envelope\"></i><span class=\"text\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["map_email"] ?? null), "html", null, true));
                echo "</span></span>";
            }
            echo "</p>' 
\t\t\t    + '";
            // line 74
            if (($context["map_address"] ?? null)) {
                echo "<p class=\"gmap-open\"><a href=\"https://www.google.com/maps/place/";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["map_address"] ?? null), "html", null, true));
                echo "/data=!4m2!3m1!1s0x89c259af44f80211:0xbd87d30d3c7da9d2?sa=X&amp;ei=KqAdVazxJMTkuQS9sIGIBQ&amp;aved=0CB0Q8gEwAA\" target=\"_blank\">Open in Google Maps</a></p>";
            }
            echo "</div>';
        
    \t\t\tvar infowindow = new google.maps.InfoWindow({
\t\t\t        content: contentString,
\t\t\t    });
    
\t\t\t    marker = new google.maps.Marker({
\t\t\t        map: map,
\t\t\t        draggable: true,
\t\t\t        title: 'Vanessa', //change title here
\t\t\t        animation: google.maps.Animation.DROP,
\t\t\t        position: mapLocation
\t\t\t    });

\t\t\t    google.maps.event.addListener(marker, 'click', function() {
\t\t\t        infowindow.open(map, marker);
\t\t\t    });

\t\t\t    infowindow.open(map, marker);

\t\t\t}
\t\t\t(function(\$){
\t\t\t  if (\$('#map').length) {
\t\t\t    google.maps.event.addDomListener(window, 'load', initialize);
\t\t\t  }
\t\t\t})(jQuery);
\t\t</script>
    ";
        }
        // line 102
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/vanessa/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 102,  147 => 74,  128 => 73,  96 => 46,  93 => 45,  91 => 44,  87 => 43,  83 => 42,  79 => 41,  75 => 40,  68 => 36,  64 => 35,  60 => 34,  55 => 32,  51 => 31,  46 => 29,  43 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/vanessa/templates/html.html.twig", "/var/www/test.2movepeople.dk/public_html/themes/vanessa/templates/html.html.twig");
    }
}
