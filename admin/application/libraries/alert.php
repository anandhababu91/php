<?php class Alert
		{
			 
			public function success($value=NULL)
			{
				 return "<div class='alert alert-success'>".$value."</div>";

			 
			}
			public function danger($value=NULL)
			{
				 return "<div class='alert alert-danger'>".$value."</div>";  
			}
			public function warning($value=NULL)
			{
				return "<div class='alert alert-warning'>".$value."</div>";

				 
			}
			public function primary($value=NULL)
			{
				return "<div class='alert alert-primary'>".$value."</div>";

				 
			}
			public function info($value=NULL)
			{
				return "<div class='alert alert-info'>".$value."</div>";

				 
			}

		}