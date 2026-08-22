<?php

test('homepage loads and contains the hero heading', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    // Use assertSeeText to match rendered text content (ignores HTML tags/newlines)
    $response->assertSeeText('Transforming Education');
});
