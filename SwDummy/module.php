<?

	class SwDummy extends IPSModule
	{
		
		public function __construct($InstanceID)
		{
			//Never delete this line!
			parent::__construct($InstanceID);
			
		}
		
		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
			
		}
		
		public function HelloWorld($message)
		{
			IPS_LogMessage("SmartWire SwDummy->HelloWorld() invoked with message ", $message);
		}
		

	}
