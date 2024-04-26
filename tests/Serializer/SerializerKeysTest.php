<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Serializer;

use WBW\Library\Common\Serializer\SerializerKeys;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("a", SerializerKeys::A);
        $this->assertEquals("a1", SerializerKeys::A1);
        $this->assertEquals("accessToken", SerializerKeys::ACCESS_TOKEN);
        $this->assertEquals("account", SerializerKeys::ACCOUNT);
        $this->assertEquals("accountNumber", SerializerKeys::ACCOUNT_NUMBER);
        $this->assertEquals("accountingCode", SerializerKeys::ACCOUNTING_CODE);
        $this->assertEquals("active", SerializerKeys::ACTIVE);
        $this->assertEquals("addressee", SerializerKeys::ADDRESSEE);
        $this->assertEquals("addresseeDescription", SerializerKeys::ADDRESSEE_DESCRIPTION);
        $this->assertEquals("apiToken", SerializerKeys::API_TOKEN);
        $this->assertEquals("available", SerializerKeys::AVAILABLE);
        $this->assertEquals("avatar", SerializerKeys::AVATAR);
        $this->assertEquals("average", SerializerKeys::AVERAGE);

        $this->assertEquals("b", SerializerKeys::B);
        $this->assertEquals("bankCode", SerializerKeys::BANK_CODE);
        $this->assertEquals("bankDomiciliation", SerializerKeys::BANK_DOMICILIATION);
        $this->assertEquals("bankName", SerializerKeys::BANK_NAME);
        $this->assertEquals("beginsAt", SerializerKeys::BEGINS_AT);
        $this->assertEquals("beginsOn", SerializerKeys::BEGINS_ON);
        $this->assertEquals("bic", SerializerKeys::BIC);
        $this->assertEquals("billable", SerializerKeys::BILLABLE);
        $this->assertEquals("billingAddressAddressee", SerializerKeys::BILLING_ADDRESS_ADDRESSEE);
        $this->assertEquals("billingAddressCountry", SerializerKeys::BILLING_ADDRESS_COUNTRY);
        $this->assertEquals("billingAddressHouseNumber", SerializerKeys::BILLING_ADDRESS_HOUSE_NUMBER);
        $this->assertEquals("billingAddressLocation", SerializerKeys::BILLING_ADDRESS_LOCATION);
        $this->assertEquals("billingAddressPostalCode", SerializerKeys::BILLING_ADDRESS_POSTAL_CODE);
        $this->assertEquals("billingAddressStreetName", SerializerKeys::BILLING_ADDRESS_STREET_NAME);
        $this->assertEquals("birthDate", SerializerKeys::BIRTH_DATE);
        $this->assertEquals("branchCode", SerializerKeys::BRANCH_CODE);

        $this->assertEquals("c1", SerializerKeys::C1);
        $this->assertEquals("c3", SerializerKeys::C3);
        $this->assertEquals("c41", SerializerKeys::C41);
        $this->assertEquals("c4a", SerializerKeys::C4A);
        $this->assertEquals("category", SerializerKeys::CATEGORY);
        $this->assertEquals("civility", SerializerKeys::CIVILITY);
        $this->assertEquals("code", SerializerKeys::CODE);
        $this->assertEquals("codename", SerializerKeys::CODENAME);
        $this->assertEquals("color", SerializerKeys::COLOR);
        $this->assertEquals("column", SerializerKeys::COLUMN);
        $this->assertEquals("comment", SerializerKeys::COMMENT);
        $this->assertEquals("content", SerializerKeys::CONTENT);
        $this->assertEquals("count", SerializerKeys::COUNT);
        $this->assertEquals("country", SerializerKeys::COUNTRY);
        $this->assertEquals("created", SerializerKeys::CREATED);
        $this->assertEquals("createdAt", SerializerKeys::CREATED_AT);
        $this->assertEquals("customer", SerializerKeys::CUSTOMER);

        $this->assertEquals("d1", SerializerKeys::D1);
        $this->assertEquals("d2", SerializerKeys::D2);
        $this->assertEquals("d21", SerializerKeys::D21);
        $this->assertEquals("d3", SerializerKeys::D3);
        $this->assertEquals("data", SerializerKeys::DATA);
        $this->assertEquals("dataGet", SerializerKeys::DATA_GET);
        $this->assertEquals("dataPost", SerializerKeys::DATA_POST);
        $this->assertEquals("date", SerializerKeys::DATE);
        $this->assertEquals("debug", SerializerKeys::DEBUG);
        $this->assertEquals("deleted", SerializerKeys::DELETED);
        $this->assertEquals("deliveryAddressAddressee", SerializerKeys::DELIVERY_ADDRESS_ADDRESSEE);
        $this->assertEquals("deliveryAddressCountry", SerializerKeys::DELIVERY_ADDRESS_COUNTRY);
        $this->assertEquals("deliveryAddressHouseNumber", SerializerKeys::DELIVERY_ADDRESS_HOUSE_NUMBER);
        $this->assertEquals("deliveryAddressLocation", SerializerKeys::DELIVERY_ADDRESS_LOCATION);
        $this->assertEquals("deliveryAddressPostalCode", SerializerKeys::DELIVERY_ADDRESS_POSTAL_CODE);
        $this->assertEquals("deliveryAddressStreetName", SerializerKeys::DELIVERY_ADDRESS_STREET_NAME);
        $this->assertEquals("description", SerializerKeys::DESCRIPTION);
        $this->assertEquals("details", SerializerKeys::DETAILS);
        $this->assertEquals("directory", SerializerKeys::DIRECTORY);
        $this->assertEquals("disabled", SerializerKeys::DISABLED);
        $this->assertEquals("discountAmount", SerializerKeys::DISCOUNT_AMOUNT);
        $this->assertEquals("discountRate", SerializerKeys::DISCOUNT_RATE);
        $this->assertEquals("discountTotal", SerializerKeys::DISCOUNT_TOTAL);
        $this->assertEquals("dns", SerializerKeys::DNS);
        $this->assertEquals("domain", SerializerKeys::DOMAIN);
        $this->assertEquals("duplex", SerializerKeys::DUPLEX);
        $this->assertEquals("duration", SerializerKeys::DURATION);

        $this->assertEquals("e", SerializerKeys::E);
        $this->assertEquals("email", SerializerKeys::EMAIL);
        $this->assertEquals("enable", SerializerKeys::ENABLE);
        $this->assertEquals("enabled", SerializerKeys::ENABLED);
        $this->assertEquals("endedAt", SerializerKeys::ENDED_AT);
        $this->assertEquals("endedOn", SerializerKeys::ENDED_ON);
        $this->assertEquals("entity", SerializerKeys::ENTITY);
        $this->assertEquals("entityData", SerializerKeys::ENTITY_DATA);
        $this->assertEquals("entityId", SerializerKeys::ENTITY_ID);
        $this->assertEquals("environment", SerializerKeys::ENVIRONMENT);
        $this->assertEquals("error", SerializerKeys::ERROR);
        $this->assertEquals("errors", SerializerKeys::ERRORS);
        $this->assertEquals("excludingVatPrice", SerializerKeys::EXCLUDING_VAT_PRICE);
        $this->assertEquals("excludingVatTotal", SerializerKeys::EXCLUDING_VAT_TOTAL);
        $this->assertEquals("expirationDate", SerializerKeys::EXPIRATION_DATE);
        $this->assertEquals("extension", SerializerKeys::EXTENSION);

        $this->assertEquals("f1", SerializerKeys::F1);
        $this->assertEquals("f2", SerializerKeys::F2);
        $this->assertEquals("f3", SerializerKeys::F3);
        $this->assertEquals("filename", SerializerKeys::FILENAME);
        $this->assertEquals("fileSystem", SerializerKeys::FILE_SYSTEM);
        $this->assertEquals("finishesAt", SerializerKeys::FINISHES_AT);
        $this->assertEquals("finishesOn", SerializerKeys::FINISHES_ON);
        $this->assertEquals("firstName", SerializerKeys::FIRST_NAME);
        $this->assertEquals("format", SerializerKeys::FORMAT);
        $this->assertEquals("from", SerializerKeys::FROM);

        $this->assertEquals("g", SerializerKeys::G);
        $this->assertEquals("g1", SerializerKeys::G1);
        $this->assertEquals("gateway", SerializerKeys::GATEWAY);
        $this->assertEquals("gid", SerializerKeys::GID);

        $this->assertEquals("h", SerializerKeys::H);
        $this->assertEquals("hash", SerializerKeys::HASH);
        $this->assertEquals("hashMD5", SerializerKeys::HASH_MD5);
        $this->assertEquals("hashSHA1", SerializerKeys::HASH_SHA1);
        $this->assertEquals("hashSHA256", SerializerKeys::HASH_SHA256);
        $this->assertEquals("height", SerializerKeys::HEIGHT);
        $this->assertEquals("hi", SerializerKeys::HI);
        $this->assertEquals("hostname", SerializerKeys::HOSTNAME);
        $this->assertEquals("houseNumber", SerializerKeys::HOUSE_NUMBER);

        $this->assertEquals("i", SerializerKeys::I);
        $this->assertEquals("i1", SerializerKeys::I1);
        $this->assertEquals("iban", SerializerKeys::IBAN);
        $this->assertEquals("icon", SerializerKeys::ICON);
        $this->assertEquals("id", SerializerKeys::ID);
        $this->assertEquals("identifier", SerializerKeys::IDENTIFIER);
        $this->assertEquals("image", SerializerKeys::IMAGE);
        $this->assertEquals("includingVatPrice", SerializerKeys::INCLUDING_VAT_PRICE);
        $this->assertEquals("includingVatTotal", SerializerKeys::INCLUDING_VAT_TOTAL);
        $this->assertEquals("income", SerializerKeys::INCOME);
        $this->assertEquals("ipAddress", SerializerKeys::IP_ADDRESS);
        $this->assertEquals("ipv4", SerializerKeys::IPV4);
        $this->assertEquals("ipv6", SerializerKeys::IPV6);

        $this->assertEquals("key", SerializerKeys::KEY);

        $this->assertEquals("j", SerializerKeys::J);
        $this->assertEquals("j1", SerializerKeys::J1);
        $this->assertEquals("j2", SerializerKeys::J2);
        $this->assertEquals("j3", SerializerKeys::J3);

        $this->assertEquals("k", SerializerKeys::K);

        $this->assertEquals("label", SerializerKeys::LABEL);
        $this->assertEquals("lang", SerializerKeys::LANG);
        $this->assertEquals("lastName", SerializerKeys::LAST_NAME);
        $this->assertEquals("lastUpdate", SerializerKeys::LAST_UPDATE);
        $this->assertEquals("lat", SerializerKeys::LAT);
        $this->assertEquals("latitude", SerializerKeys::LATITUDE);
        $this->assertEquals("limit", SerializerKeys::LIMIT);
        $this->assertEquals("link", SerializerKeys::LINK);
        $this->assertEquals("locate", SerializerKeys::LOCATE);
        $this->assertEquals("location", SerializerKeys::LOCATION);
        $this->assertEquals("logo", SerializerKeys::LOGO);
        $this->assertEquals("lon", SerializerKeys::LON);
        $this->assertEquals("longitude", SerializerKeys::LONGITUDE);

        $this->assertEquals("mac", SerializerKeys::MAC);
        $this->assertEquals("macAddress", SerializerKeys::MAC_ADDRESS);
        $this->assertEquals("maritalStatus", SerializerKeys::MARITAL_STATUS);
        $this->assertEquals("matcher", SerializerKeys::MATCHER);
        $this->assertEquals("max", SerializerKeys::MAX);
        $this->assertEquals("maximum", SerializerKeys::MAXIMUM);
        $this->assertEquals("maxDuration", SerializerKeys::MAX_DURATION);
        $this->assertEquals("maxWidth", SerializerKeys::MAX_WIDTH);
        $this->assertEquals("mention", SerializerKeys::MENTION);
        $this->assertEquals("message", SerializerKeys::MESSAGE);
        $this->assertEquals("method", SerializerKeys::METHOD);
        $this->assertEquals("mimeType", SerializerKeys::MIME_TYPE);
        $this->assertEquals("min", SerializerKeys::MIN);
        $this->assertEquals("minimum", SerializerKeys::MINIMUM);
        $this->assertEquals("minDuration", SerializerKeys::MIN_DURATION);
        $this->assertEquals("minHeight", SerializerKeys::MIN_HEIGHT);
        $this->assertEquals("minWidth", SerializerKeys::MIN_WIDTH);
        $this->assertEquals("mobile", SerializerKeys::MOBILE);
        $this->assertEquals("motif", SerializerKeys::MOTIF);
        $this->assertEquals("mountedOn", SerializerKeys::MOUNTED_ON);

        $this->assertEquals("nafCode", SerializerKeys::NAF_CODE);
        $this->assertEquals("name", SerializerKeys::NAME);
        $this->assertEquals("ni", SerializerKeys::NI);
        $this->assertEquals("notify", SerializerKeys::NOTIFY);
        $this->assertEquals("number", SerializerKeys::NUMBER);

        $this->assertEquals("object", SerializerKeys::OBJECT);
        $this->assertEquals("orientation", SerializerKeys::ORIENTATION);
        $this->assertEquals("originUrl", SerializerKeys::ORIGIN_URL);
        $this->assertEquals("owner", SerializerKeys::OWNER);

        $this->assertEquals("p1", SerializerKeys::P1);
        $this->assertEquals("p2", SerializerKeys::P2);
        $this->assertEquals("p3", SerializerKeys::P3);
        $this->assertEquals("p6", SerializerKeys::P6);
        $this->assertEquals("page", SerializerKeys::PAGE);
        $this->assertEquals("parent", SerializerKeys::PARENT);
        $this->assertEquals("password", SerializerKeys::PASSWORD);
        $this->assertEquals("pathname", SerializerKeys::PATHNAME);
        $this->assertEquals("paymentDate", SerializerKeys::PAYMENT_DATE);
        $this->assertEquals("perPage", SerializerKeys::PER_PAGE);
        $this->assertEquals("phone", SerializerKeys::PHONE);
        $this->assertEquals("picture", SerializerKeys::PICTURE);
        $this->assertEquals("port", SerializerKeys::PORT);
        $this->assertEquals("position", SerializerKeys::POSITION);
        $this->assertEquals("postalCode", SerializerKeys::POSTAL_CODE);
        $this->assertEquals("purchasesAccountingAccount", SerializerKeys::PURCHASES_ACCOUNTING_ACCOUNT);

        $this->assertEquals("q", SerializerKeys::Q);
        $this->assertEquals("quantity", SerializerKeys::QUANTITY);
        $this->assertEquals("query", SerializerKeys::QUERY);

        $this->assertEquals("rate", SerializerKeys::RATE);
        $this->assertEquals("rawData", SerializerKeys::RAW_DATA);
        $this->assertEquals("rawResponse", SerializerKeys::RAW_RESPONSE);
        $this->assertEquals("ready", SerializerKeys::READY);
        $this->assertEquals("reference", SerializerKeys::REFERENCE);
        $this->assertEquals("redirectUrl", SerializerKeys::REDIRECT_URL);
        $this->assertEquals("release", SerializerKeys::RELEASE);
        $this->assertEquals("remaining", SerializerKeys::REMAINING);
        $this->assertEquals("request", SerializerKeys::REQUEST);
        $this->assertEquals("requestDataGet", SerializerKeys::REQUEST_DATA_GET);
        $this->assertEquals("requestDataPost", SerializerKeys::REQUEST_DATA_POST);
        $this->assertEquals("requestMethod", SerializerKeys::REQUEST_METHOD);
        $this->assertEquals("requestRoute", SerializerKeys::REQUEST_ROUTE);
        $this->assertEquals("requestUrl", SerializerKeys::REQUEST_URL);
        $this->assertEquals("reset", SerializerKeys::RESET);
        $this->assertEquals("ribKey", SerializerKeys::RIB_KEY);
        $this->assertEquals("route", SerializerKeys::ROUTE);
        $this->assertEquals("role", SerializerKeys::ROLE);
        $this->assertEquals("roles", SerializerKeys::ROLES);

        $this->assertEquals("s1", SerializerKeys::S1);
        $this->assertEquals("s2", SerializerKeys::S2);
        $this->assertEquals("salesAccountingAccount", SerializerKeys::SALES_ACCOUNTING_ACCOUNT);
        $this->assertEquals("salt", SerializerKeys::SALT);
        $this->assertEquals("schema", SerializerKeys::SCHEMA);
        $this->assertEquals("score", SerializerKeys::SCORE);
        $this->assertEquals("sendingAddressAddressee", SerializerKeys::SENDING_ADDRESS_ADDRESSEE);
        $this->assertEquals("sendingAddressCountry", SerializerKeys::SENDING_ADDRESS_COUNTRY);
        $this->assertEquals("sendingAddressHouseNumber", SerializerKeys::SENDING_ADDRESS_HOUSE_NUMBER);
        $this->assertEquals("sendingAddressLocation", SerializerKeys::SENDING_ADDRESS_LOCATION);
        $this->assertEquals("sendingAddressPostalCode", SerializerKeys::SENDING_ADDRESS_POSTAL_CODE);
        $this->assertEquals("sendingAddressStreetName", SerializerKeys::SENDING_ADDRESS_STREET_NAME);
        $this->assertEquals("si", SerializerKeys::SI);
        $this->assertEquals("siretNumber", SerializerKeys::SIRET_NUMBER);
        $this->assertEquals("size", SerializerKeys::SIZE);
        $this->assertEquals("source", SerializerKeys::SOURCE);
        $this->assertEquals("speed", SerializerKeys::SPEED);
        $this->assertEquals("st", SerializerKeys::ST);
        $this->assertEquals("startedAt", SerializerKeys::STARTED_AT);
        $this->assertEquals("startedOn", SerializerKeys::STARTED_ON);
        $this->assertEquals("state", SerializerKeys::STATE);
        $this->assertEquals("status", SerializerKeys::STATUS);
        $this->assertEquals("streetName", SerializerKeys::STREET_NAME);
        $this->assertEquals("style", SerializerKeys::STYLE);
        $this->assertEquals("subject", SerializerKeys::SUBJECT);
        $this->assertEquals("success", SerializerKeys::SUCCESS);
        $this->assertEquals("sy", SerializerKeys::SY);

        $this->assertEquals("table", SerializerKeys::TABLE);
        $this->assertEquals("target", SerializerKeys::TARGET);
        $this->assertEquals("text", SerializerKeys::TEXT);
        $this->assertEquals("title", SerializerKeys::TITLE);
        $this->assertEquals("to", SerializerKeys::TO);
        $this->assertEquals("token", SerializerKeys::TOKEN);
        $this->assertEquals("tooltip", SerializerKeys::TOOLTIP);
        $this->assertEquals("total", SerializerKeys::TOTAL);
        $this->assertEquals("totalAmount", SerializerKeys::TOTAL_AMOUNT);
        $this->assertEquals("type", SerializerKeys::TYPE);

        $this->assertEquals("u1", SerializerKeys::U1);
        $this->assertEquals("u2", SerializerKeys::U2);
        $this->assertEquals("uid", SerializerKeys::UID);
        $this->assertEquals("unitPrice", SerializerKeys::UNIT_PRICE);
        $this->assertEquals("unitValue", SerializerKeys::UNIT_VALUE);
        $this->assertEquals("updatedAt", SerializerKeys::UPDATED_AT);
        $this->assertEquals("uri", SerializerKeys::URI);
        $this->assertEquals("url", SerializerKeys::URL);
        $this->assertEquals("us", SerializerKeys::US);
        $this->assertEquals("used", SerializerKeys::USED);
        $this->assertEquals("username", SerializerKeys::USERNAME);
        $this->assertEquals("usePercent", SerializerKeys::USE_PERCENT);
        $this->assertEquals("userAgent", SerializerKeys::USER_AGENT);

        $this->assertEquals("v7", SerializerKeys::V7);
        $this->assertEquals("v9", SerializerKeys::V9);
        $this->assertEquals("value", SerializerKeys::VALUE);
        $this->assertEquals("vatAmount", SerializerKeys::VAT_AMOUNT);
        $this->assertEquals("vatNumber", SerializerKeys::VAT_NUMBER);
        $this->assertEquals("vatRate", SerializerKeys::VAT_RATE);
        $this->assertEquals("vatTotal", SerializerKeys::VAT_TOTAL);
        $this->assertEquals("verbose", SerializerKeys::VERBOSE);
        $this->assertEquals("version", SerializerKeys::VERSION);
        $this->assertEquals("visible", SerializerKeys::VISIBLE);

        $this->assertEquals("wa", SerializerKeys::WA);
        $this->assertEquals("width", SerializerKeys::WIDTH);

        $this->assertEquals("x", SerializerKeys::X);
        $this->assertEquals("x1", SerializerKeys::X1);
        $this->assertEquals("xmlHttp", SerializerKeys::XML_HTTP);

        $this->assertEquals("y", SerializerKeys::Y);
        $this->assertEquals("y1", SerializerKeys::Y1);
        $this->assertEquals("y2", SerializerKeys::Y2);
        $this->assertEquals("y3", SerializerKeys::Y3);
        $this->assertEquals("y4", SerializerKeys::Y4);
        $this->assertEquals("y5", SerializerKeys::Y5);
        $this->assertEquals("y6", SerializerKeys::Y6);
        $this->assertEquals("year", SerializerKeys::YEAR);

        $this->assertEquals("z1", SerializerKeys::Z1);
        $this->assertEquals("z2", SerializerKeys::Z2);
        $this->assertEquals("z3", SerializerKeys::Z3);
        $this->assertEquals("z4", SerializerKeys::Z4);
    }
}
