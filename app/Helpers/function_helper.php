<?php

function pisah_email($email): array
{
    $pecah_email = explode('@', $email);
    return $pecah_email;
}
