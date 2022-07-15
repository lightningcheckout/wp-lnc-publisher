<?php

// If this file is called directly, abort.
defined('WPINC') || die; ?>

<div class="wrap lnp">
    <h1><?php echo $this->get_page_title(); ?></h1>

    <h3>Shortcodes</h3>
    <p>
        To configure each article the following shortcode attributes are available:
    </p>
    <blockquote>
        <ul>
            <li>amount</li>
            <li>total</li>
            <li>timein</li>
            <li>timeout</li>
        </ul>
    </blockquote>

    <h3>Usage</h3>
    <blockquote>
        <p>[lnpaywall] eg: [lnpaywall amount="100"]</p>
    </blockquote>

    <h3>Wallet Settings</h3>
    <p>
      You have the option to receive your payments in the following wallets:
    </p>
    <blockquote>
        <ul>
            <li>Alby Wallet: Alby provides an easy to use all-in one service and manages a Lightning wallet for you. More information: https://getalby.com/</li>
            <li>LND: The Lightning Network Daemon (LND) is one implementation of several of a Lightning Network node. If you want to connect a LND node make sure to have enough incoming liquidity to receive all payments.</li>
            <li>LNDHub: A free and open source, multiple account plugin for Lightning built on top of the Lightning Network Deamon. It allows that a group of users run different accounts with only one node in a trust-minimized setup. More information: https://github.com/getAlby/lndhub.go</li>
            <li>LNbits: A free and open-source Lightning accounts system with extensions. More information: https://lnbits.com/</li>
            <li>BTCPay: A self-hosted, open-source cryptocurrency payment processor. More information: https://btcpayserver.org/</li>
            <li>Lightning Address: A simple way for anyone to send you bitcoin instantly on the Lightning Network.It looks like a normal email address such as you@payaddress.com. But it only works if the website visitor uses a WebLN enabled wallet to pay. More information: https://lightningaddress.com/</li>
        </ul>
    </blockquote>

</div>
