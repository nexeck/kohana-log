<?php
class Controller_Log extends Controller 
{
	public function action_view()
	{
		$log_dir = APPPATH.'logs';
		$date = $this->request->param('date', date('Y/m/d'));
		if (!file_exists($log_file = $log_dir.DIRECTORY_SEPARATOR.$date.EXT))
		{
			throw new Log_Exception('log file :file not exists', array(
				':file' => $log_file,
			));
		}
		$logs = Log_Parser::parse_file($log_file);
		$view = View::factory('log_view')
			->set('logs', $logs);
		$this->response->body($view);
	}
}
