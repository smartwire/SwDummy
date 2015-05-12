<?

	class SwHelloWorld extends IPSModule
	{
		
		public function __construct($InstanceID)
		{
			//Never delete this line!
			parent::__construct($InstanceID);
			
			IPS_LogMessage("SwHelloWorld->__construct() invoked with InstanceID", $InstanceID);
			var_dump($this);
		}
		
		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
			
			IPS_LogMessage("SwHelloWorld->ApplyChanges() invoked");
			var_dump($this);
		}
		
		public function HelloWorld($message)
		{
			IPS_LogMessage("SwHelloWorld->HelloWorld() invoked with message ", $message);
		}
		

	}
