<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/install/wizard_sol/wizard.php");

class SelectSiteStep extends CSelectSiteWizardStep
{
	function InitStep()
	{
		parent::InitStep();

		$wizard =& $this->GetWizard();
		$wizard->solutionName = "landing";
	}
}

class SelectTemplateStep extends CSelectTemplateWizardStep { }

class SelectThemeStep extends CSelectThemeWizardStep { }

class SiteSettingsStep extends CSiteSettingsWizardStep
{
	function InitStep()
	{
		$wizard =& $this->GetWizard();
		$wizard->solutionName = "landing";
		parent::InitStep();
		
		$this->SetTitle(GetMessage("wiz_settings"));
		$this->SetNextStep("data_install");
		$this->SetNextCaption(GetMessage("wiz_install"));

		$siteID = $wizard->GetVar("siteID");


		$wizard->SetDefaultVars(
			Array(
				"address" => COption::GetOptionString("main", "site_landing_address", GetMessage("wiz_address"), $wizard->GetVar("siteID")),
				"zip" => COption::GetOptionString("main", "site_landing_zip", GetMessage("wiz_zip"), $wizard->GetVar("siteID")),
				"phoneone" => COption::GetOptionString("main", "site_landing_phoneone", GetMessage("wiz_phoneone"), $wizard->GetVar("siteID")),
				"phonetwo" => COption::GetOptionString("main", "site_landing_phonetwo", GetMessage("wiz_phonetwo"), $wizard->GetVar("siteID")),
				"copyright" => COption::GetOptionString("main", "site_landing_copyright", GetMessage("wiz_copyright"), $wizard->GetVar("siteID")),
				"facebook" => COption::GetOptionString("main", "site_facebook", GetMessage("wiz_facebook"), $wizard->GetVar("siteID")),
				"twitter" => COption::GetOptionString("main", "site_twitter", GetMessage("wiz_twitter"), $wizard->GetVar("siteID")),
				"gplus" => COption::GetOptionString("main", "site_gplus", GetMessage("wiz_gplus"), $wizard->GetVar("siteID")),
				"lin" => COption::GetOptionString("main", "site_lin", GetMessage("wiz_lin"), $wizard->GetVar("siteID")),
				"installDemoData" => COption::GetOptionString("main", "wizard_demo_data", "N")
			)
		);
	}

	function OnPostForm()
	{
		$wizard =& $this->GetWizard();
		
		if ($wizard->IsNextButtonClick())
		{
			COption::SetOptionString("main", "site_landing_address", str_replace(Array("<"), Array("&lt;"), $wizard->GetVar("address")));
			COption::SetOptionString("main", "site_landing_zip", str_replace(Array("<"), Array("&lt;"), $wizard->GetVar("zip")));
			COption::SetOptionString("main", "site_landing_phoneone", str_replace(Array("<"), Array("&lt;"), $wizard->GetVar("phoneone")));
			COption::SetOptionString("main", "site_landing_phonetwo", str_replace(Array("<"), Array("&lt;"), $wizard->GetVar("phonetwo")));
			COption::SetOptionString("main", "site_landing_copyright", str_replace(Array("<"), Array("&lt;"), $wizard->GetVar("copyright")));
			COption::SetOptionString("main", "site_facebook", str_replace(Array("<"), Array("&lt;"), $wizard->GetVar("facebook")));
			COption::SetOptionString("main", "site_twitter", str_replace(Array("<"), Array("&lt;"), $wizard->GetVar("twitter")));
			COption::SetOptionString("main", "site_gplus", str_replace(Array("<"), Array("&lt;"), $wizard->GetVar("gplus")));
			COption::SetOptionString("main", "site_lin", str_replace(Array("<"), Array("&lt;"), $wizard->GetVar("lin")));
		}
	}

	function ShowStep()
	{
		$wizard =& $this->GetWizard();
		$wizard->SetVar("address", COption::GetOptionString("main", "site_landing_address", GetMessage("wiz_address"), $wizard->GetVar("siteID")));
		$wizard->SetVar("zip", COption::GetOptionString("main", "site_landing_zip", GetMessage("wiz_zip"), $wizard->GetVar("siteID")));
		$wizard->SetVar("phoneone", COption::GetOptionString("main", "site_landing_phoneone", GetMessage("wiz_phoneone"), $wizard->GetVar("siteID")));
		$wizard->SetVar("phonetwo", COption::GetOptionString("main", "site_landing_phonetwo", GetMessage("wiz_phonetwo"), $wizard->GetVar("siteID")));
		$wizard->SetVar("copyright", COption::GetOptionString("main", "site_landing_copyright", GetMessage("wiz_copyright"), $wizard->GetVar("siteID")));
		$wizard->SetVar("facebook", COption::GetOptionString("main", "site_facebook", GetMessage("wiz_facebook"), $wizard->GetVar("siteID")));
		$wizard->SetVar("twitter", COption::GetOptionString("main", "site_twitter", GetMessage("wiz_twitter"), $wizard->GetVar("siteID")));
		$wizard->SetVar("gplus", COption::GetOptionString("main", "site_gplus", GetMessage("wiz_gplus"), $wizard->GetVar("siteID")));
		$wizard->SetVar("lin", COption::GetOptionString("main", "site_lin", GetMessage("wiz_lin"), $wizard->GetVar("siteID")));
		
		$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">'.GetMessage("wiz_company_address").'</div>';
		$this->content .= $this->ShowInputField("text", "address", Array("id" => "site-site_landing_address", "class" => "wizard-field"))."</div>";
		
		$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">'.GetMessage("wiz_company_zip").'</div>';
		$this->content .= $this->ShowInputField("text", "zip", Array("id" => "site_landing_zip", "class" => "wizard-field"))."</div>";
		
		$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">'.GetMessage("wiz_company_phoneone").'</div>';
		$this->content .= $this->ShowInputField("text", "phoneone", Array("id" => "site_landing_phoneone", "class" => "wizard-field"))."</div>";
		
		$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">'.GetMessage("wiz_company_phonetwo").'</div>';
		$this->content .= $this->ShowInputField("text", "phonetwo", Array("id" => "site_landing_phonetwo", "class" => "wizard-field"))."</div>";
		
		$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">'.GetMessage("wiz_company_copyright").'</div>';
		$this->content .= $this->ShowInputField("text", "copyright", Array("id" => "site_landing_copyright", "class" => "wizard-field"))."</div>";
		
		$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">'.GetMessage("wiz_company_social").'</div>';
		$this->content .= $this->ShowInputField("text", "facebook", Array("id" => "site_facebook", "class" => "wizard-field"));
		$this->content .= $this->ShowInputField("text", "twitter", Array("id" => "site_twitter", "class" => "wizard-field"));
		$this->content .= $this->ShowInputField("text", "gplus", Array("id" => "site_gplus", "class" => "wizard-field"));
		$this->content .= $this->ShowInputField("text", "lin", Array("id" => "site_lin", "class" => "wizard-field"))."</div>";
		

		$firstStep = COption::GetOptionString("main", "wizard_first" . substr($wizard->GetID(), 7)  . "_" . $wizard->GetVar("siteID"), false, $wizard->GetVar("siteID")); 
		if($firstStep == "Y")
		{
			$this->content .= $this->ShowCheckboxField(
									"installDemoData", 
									"Y", 
									(array("id" => "installDemoData"))
								);
			$this->content .= '<label for="install-demo-data">'.GetMessage("wiz_structure_data").'</label><br />';
		}
		else
		{
			$this->content .= $this->ShowHiddenField("installDemoData","Y");

		}

		$formName = $wizard->GetFormName();
		$installCaption = $this->GetNextCaption();
		$nextCaption = GetMessage("NEXT_BUTTON");
	}
}

class DataInstallStep extends CDataInstallWizardStep
{
	function CorrectServices(&$arServices)
	{
		$wizard =& $this->GetWizard();
		if($wizard->GetVar("installDemoData") != "Y")
		{
		}
	}
}

class FinishStep extends CFinishWizardStep
{
}
?>