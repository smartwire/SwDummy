<?

	class SwHelloWorld extends IPSModule
	{
		
		public function __construct($InstanceID)
		{
			//Never delete this line!
			parent::__construct($InstanceID);
			
			IPS_LogMessage("SwHelloWorld", "SwHelloWorld->__construct() invoked with InstanceID ". $InstanceID);
		}
		
		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
			
			IPS_LogMessage("SwHelloWorld", "SwHelloWorld->ApplyChanges() invoked");
		}
		
		public function HelloWorld()
		{
			IPS_LogMessage("SwHelloWorld", "SwHelloWorld->HelloWorld() invoked");
		}
		

	}
