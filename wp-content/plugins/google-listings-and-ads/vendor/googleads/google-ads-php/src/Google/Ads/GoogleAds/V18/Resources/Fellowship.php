<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/local_services_employee.proto

namespace Google\Ads\GoogleAds\V18\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details about the employee's medical Fellowship.
 * Fellowship is a period of medical training that the professional undertakes
 * after finishing their residency.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.resources.Fellowship</code>
 */
class Fellowship extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the instutition at which the fellowship was completed.
     *
     * Generated from protobuf field <code>optional string institution_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $institution_name = null;
    /**
     * Output only. Year of completion.
     *
     * Generated from protobuf field <code>optional int32 completion_year = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $completion_year = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $institution_name
     *           Output only. Name of the instutition at which the fellowship was completed.
     *     @type int $completion_year
     *           Output only. Year of completion.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Resources\LocalServicesEmployee::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the instutition at which the fellowship was completed.
     *
     * Generated from protobuf field <code>optional string institution_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInstitutionName()
    {
        return isset($this->institution_name) ? $this->institution_name : '';
    }

    public function hasInstitutionName()
    {
        return isset($this->institution_name);
    }

    public function clearInstitutionName()
    {
        unset($this->institution_name);
    }

    /**
     * Output only. Name of the instutition at which the fellowship was completed.
     *
     * Generated from protobuf field <code>optional string institution_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInstitutionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->institution_name = $var;

        return $this;
    }

    /**
     * Output only. Year of completion.
     *
     * Generated from protobuf field <code>optional int32 completion_year = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getCompletionYear()
    {
        return isset($this->completion_year) ? $this->completion_year : 0;
    }

    public function hasCompletionYear()
    {
        return isset($this->completion_year);
    }

    public function clearCompletionYear()
    {
        unset($this->completion_year);
    }

    /**
     * Output only. Year of completion.
     *
     * Generated from protobuf field <code>optional int32 completion_year = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setCompletionYear($var)
    {
        GPBUtil::checkInt32($var);
        $this->completion_year = $var;

        return $this;
    }

}

