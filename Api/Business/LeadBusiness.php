<?php
namespace Api\Business;

use Api\Model\Lead;

class LeadBusiness extends Business {

    /**
     * Get Lead By FacebookId
     * @param $facebookId
     * @return Lead
     */
    public static function getLeadByFacebookId($facebookId){
        new static;

        $lead = Lead::where('facebookid__c',$facebookId)->first();
        if ($lead)
            return $lead->toArray();
        else
            return null;
    }

    /**
     * create new lead
     * @param $lead
     * @return bool
     */
    public static function createLead($lead) {
        new static;

        $newLead = new Lead();
        $newLead->firstname     = $lead['firstname'];
        $newLead->lastname      = $lead['lastname'];
        $newLead->facebookid__c = $lead['facebook_id'];
        $newLead->phone         = $lead['phone'];
        $newLead->email         = $lead['email'];
        $newLead->status        = "Open";
        $newLead->save();

        return true;
    }

    /**
     * Update Lead by new Lead information
     * @param $facebookId
     * @param $lead
     * @return bool
     */
    public static function updateLead($facebookId, $lead){
        new static;

        $updateLead = Lead::where('facebook_id',$facebookId)->first();

        if ($updateLead) {
            $updateLead->firstname     = $lead['firstname'];
            $updateLead->lastname      = $lead['lastname'];
            $updateLead->facebookid__c = $lead['facebook_id'];
            $updateLead->phone         = $lead['phone'];
            $updateLead->email         = $lead['email'];
            $lead->save();
        }
        else
            return false;

        return true;
    }
}