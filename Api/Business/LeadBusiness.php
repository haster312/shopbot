<?php
namespace Api\Business;

use Api\Model\Lead;

class LeadBusiness extends Business {

    /**
     * Get Lead By FacebookId
     * @param $facebookId
     * @return Lead
     */
    public function getLeadByFacebookId($facebookId){
        new static;

        $lead = Lead::where('facebookid__c',$facebookId)->first();
        if ($lead)
            return $lead->toArray();
        else
            return null;
    }

    /**
     * Update Lead by new Lead information
     * @param $facebookId
     * @param Lead $newLead
     */
    public function updateLead($facebookId, Lead $newLead){


    }
}