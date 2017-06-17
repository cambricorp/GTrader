<?php

namespace GTrader\Indicators;

use GTrader\Indicators\Trader;

/** Stochastic Relative Stregnth Index */
class StochRsi extends Trader
{

    public function __construct(array $params = [])
    {
        parent::__construct($params);
        $this->setParam(
            'adjustable.matype.options',
            \Config::get('GTrader.Indicators.Trader.MA_TYPES')
        );
    }

    public function runDependencies(bool $force_rerun = false)
    {
        return $this;
    }

    public function traderCalc(array $values)
    {
        if (!($values = trader_stochrsi(
            $values,
            $this->getParam('indicator.period'),
            $this->getParam('indicator.fastk'),
            $this->getParam('indicator.fastd'),
            $this->getParam('indicator.matype')
        ))) {
            error_log('trader_stochrsi returned false');
            return [];
        }
        //error_log('StochRsi: '.json_encode($values[0]));
        return $values;
    }
}