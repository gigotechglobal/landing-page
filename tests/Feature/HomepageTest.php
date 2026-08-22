<?php

test('homepage loads and contains the hero heading', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Transforming \nEducation');
});
