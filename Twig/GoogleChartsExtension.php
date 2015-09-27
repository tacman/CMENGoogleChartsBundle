<?php

namespace CMENGoogleChartsBundle\Twig;

use CMENGoogleChartsBundle\GoogleCharts\Chart;

/**
 * @author Christophe Meneses
 */
class GoogleChartsExtension extends \Twig_Extension
{
    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('drawChart', array($this, 'drawChart'), array('is_safe' => array('html')))
        );
    }

    /**
     * Returns Javascript to draw a chart in Twig template.
     *
     * @param Chart $chart A Chart Instance
     *
     * @return string The Javascript
     */
    public function drawChart(Chart $chart)
    {
        return $chart->draw();
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'cmengooglecharts_extension';
    }
}