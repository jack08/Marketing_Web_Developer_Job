<?php
class marketing_web_developer {
	private $company = 'Jobs2Careers';
	private $loation = 'Austin, TX 78759';
	private $responsibilities = array('analyze and build the best algorithms for better marketing',
				'help job seekers discover the most useful pieces of career contents',
				'make beautiful webpages/widgets that impact millions of job seekers');
	private $qualifications = array('Bachelor', 'HTML', 'CSS', 'JQuery', 'MySQL');
	private $benefits = array('401K', 'PTO', 'HSA', 'Health Insurance', 'Paid Company Holidays'...);
	private $is_filled = false;
 
	public function apply() {
		mail('jobs@jobs2careers.com', 'Marketing Web Developer', $resume);
	}
}
?>
