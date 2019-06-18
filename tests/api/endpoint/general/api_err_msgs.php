<?php

use JsonSchema\Validator;
use classes\APITestCase;
use classes\APITestUtils;

class api_err_msgs extends APITestCase {
	public function setUp(): void {
		$this->set_endpoint_method('GET');
		$this->set_endpoint_uri('general/api_err_msgs.php');
		parent::setUp();
	}

	public function test_is_response_schema_correct(): void {
		$resp = $this->api->call(
			$this->get_endpoint_method(),
			$this->get_endpoint_uri()
		);
		$this->assert_object_matches_schema(
			$resp,
			dirname(__FILE__).'/schemas/api_err_msgs.schema.json'
		);
	}
}