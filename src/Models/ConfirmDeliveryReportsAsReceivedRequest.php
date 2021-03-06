<?php
/*
 * MessagesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MessagesLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class ConfirmDeliveryReportsAsReceivedRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps delivery_report_ids
     * @var array $deliveryReportIds public property
     */
    public $deliveryReportIds;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $deliveryReportIds Initialization value for $this->deliveryReportIds
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->deliveryReportIds = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['delivery_report_ids'] = $this->deliveryReportIds;

        return $json;
    }
}
