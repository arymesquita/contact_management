<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;
use App\Http\Requests\StoreRequest;

class StoreRequestTest extends TestCase

{
    use AdditionalAssertions;

    /** @test */
    public function registration_requests_has_the_correct_rules()
    {
        $this->assertValidationRules([
            'name'        => 'required|string|min:5',
            'contact'     => 'required|string|digits:9',
            'email'       => 'required|email'
        ], (new StoreRequest())->rules());
    }
}
