<?php

namespace InCommon\Types;

/**
 * Helper class representing cert format types to be used in collection
 * methods.
 *
 * @author Dustin Wheeler <mdwheele@ncsu.edu>
 */
class CertFormat
{
    const X509_PEM_BUNDLE = 0;
    const X509_PEM_CERTIFICATE_ONLY = 1;
    const X509_PEM_INTERMEDIATE_CERTIFICATE_ONLY = 2;
    const PKCS7_PEM_BUNDLE = 3;
    const PKCS7_DER_BUNDLE = 4;
} 