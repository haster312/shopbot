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
    public static function createLead($facebookId = null, $lead) {
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
    public function updateLead($facebookId, $lead){
        new static;

        $lead = Lead::where('facebook_id',$facebookId)->first();

        if ($lead) {
            $lead->firstname     = $lead['firstname'];
            $lead->lastname      = $lead['lastname'];
            $lead->facebookid__c = $lead['facebook_id'];
            $lead->phone         = $lead['phone'];
            $lead->email         = $lead['email'];
            $lead->save();
        }
        else
            LeadBusiness::createLead($facebookId, $lead);

        return true;
    }
}