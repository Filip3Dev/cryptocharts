<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Crypto Trade - Altcoins</title>
  <?php include("include/head.php"); ?>
</head>
<body class="">
  <div class="geral">
  <?php include("include/header.php"); ?>
    <div id="currencies_wrapper" class="dataTables_wrapper no-footer margin"><table class="table dataTable no-footer" id="currencies" role="grid">
            <thead>
                <tr role="row"><th class="text-center sorting_asc" rowspan="1" colspan="1" aria-label="#" style="width: 24px;">#</th><th id="th-name" class="sortable sorting" tabindex="0" aria-controls="currencies" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 148px;">Nome</th>
                  <th id="th-marketcap" class="sortable text-right sorting" tabindex="0" aria-controls="currencies" rowspan="1" colspan="1" aria-label="Market Cap: activate to sort column descending" style="width: 121px;">Valor de Mercado</th><th id="th-price" class="sortable text-right sorting" tabindex="0" aria-controls="currencies" rowspan="1" colspan="1" aria-label="Price: activate to sort column descending" style="width: 80px;">Price</th>
                  <th id="th-totalsupply" class="sortable text-right sorting" title="The number of coins in existence available to the public" tabindex="0" aria-controls="currencies" rowspan="1" colspan="1" aria-label="Available  Supply: activate to sort column descending" style="width: 175px;">Quantidade Disponivel</th>
                  <th id="th-volume" class="sortable text-right sorting" tabindex="0" aria-controls="currencies" rowspan="1" colspan="1" aria-label="Volume (24h): activate to sort column descending" style="width: 103px;">Volume (24h)</th><th id="th-change" class="sortable text-right sorting" tabindex="0" aria-controls="currencies" rowspan="1" colspan="1" aria-label="% Change (24h): activate to sort column descending" style="width: 116px;">% Variação (24h)</th>
                  <th id="th-marketcap-graph" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Price Graph (7d)" style="width: 167px;">Gráfico de Preço (7d)</th></tr>
            </thead>
            <tbody class="margin">

            <tr id="id-bitcoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    1
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/bitcoin.png" class="currency-logo" alt="Bitcoin">
                    <a href="https://coinmarketcap.com/currencies/bitcoin/">Bitcoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="10654994017.8" data-btc="15721800.0">

                      $ 10,654,994,018

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bitcoin/" class="price" data-usd="677.721" data-btc="1.0">$ 677.72</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://blockchain.info" data-supply="15721800.0">

                          15,721,800
                          BTC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bitcoin/#markets" class="volume" data-usd="135870000.0" data-btc="200500.0">$ 135,870,000</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="1.07" data-btc="0.00">1.07 %</td>

                <td><a href="https://coinmarketcap.com/currencies/bitcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1.png"></a></td>
            </tr><tr id="id-ethereum" class="even" role="row">
                <td class="text-center sorting_1">
                    2
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/ethereum.png" class="currency-logo" alt="Ethereum">
                    <a href="https://coinmarketcap.com/currencies/ethereum/">Ethereum</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1002201185.18" data-btc="1478923.99929">

                      $ 1,002,201,185

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ethereum/#markets" class="price" data-usd="12.2861" data-btc="0.0181303">$ 12.29</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://live.ether.camp/" data-supply="81571954.0928">

                          81,571,954
                          ETH
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ethereum/#markets" class="volume" data-usd="17591200.0" data-btc="25958.8">$ 17,591,200</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-1.57" data-btc="-2.62">-1.57 %</td>

                <td><a href="https://coinmarketcap.com/currencies/ethereum/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1027.png"></a></td>
            </tr><tr id="id-ripple" class="odd" role="row">
                <td class="text-center sorting_1">
                    3
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/ripple.png" class="currency-logo" alt="Ripple">
                    <a href="https://coinmarketcap.com/currencies/ripple/">Ripple</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="239296118.043" data-btc="353123.225677">

                      $ 239,296,118

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ripple/#markets" class="price" data-usd="0.00677011" data-btc="9.99048e-06">$ 0.006770</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://ripple.com/graph" data-supply="35345971933.0">

                          35,345,971,933
                          XRP
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ripple/#markets" class="volume" data-usd="952870.0" data-btc="1406.13">$ 952,870</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="1.14" data-btc="0.07">1.14 %</td>

                <td><a href="https://coinmarketcap.com/currencies/ripple/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/52.png"></a></td>
            </tr><tr id="id-litecoin" class="even" role="row">
                <td class="text-center sorting_1">
                    4
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/litecoin.png" class="currency-logo" alt="Litecoin">
                    <a href="https://coinmarketcap.com/currencies/litecoin/">Litecoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="197882664.458" data-btc="292010.68733">

                      $ 197,882,664

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/litecoin/#markets" class="price" data-usd="4.25813" data-btc="0.00628362">$ 4.26</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://explorer.litecoin.net/chain/Litecoin" data-supply="46471729.2469">

                          46,471,729
                          LTC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/litecoin/#markets" class="volume" data-usd="6188800.0" data-btc="9132.66">$ 6,188,800</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="1.83" data-btc="0.76">1.83 %</td>

                <td><a href="https://coinmarketcap.com/currencies/litecoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/2.png"></a></td>
            </tr><tr id="id-the-dao" class="odd" role="row">
                <td class="text-center sorting_1">
                    5
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/the-dao.png" class="currency-logo" alt="The DAO">
                    <a href="https://coinmarketcap.com/assets/the-dao/">The DAO</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="110298732.024" data-btc="162764.850295">

                      $ 110,298,732

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/the-dao/#markets" class="price" data-usd="0.095593" data-btc="0.000141064">$ 0.095593</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://etherscan.io/token/TheDAO" class="stale" data-supply="1153836913.0">

                          1,153,836,913
                          DAO
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/the-dao/#markets" class="volume" data-usd="740237.0" data-btc="1092.35">$ 740,237</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-0.02" data-btc="-1.09">-0.02 %</td>

                <td><a href="https://coinmarketcap.com/assets/the-dao/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1253.png"></a></td>
            </tr><tr id="id-nem" class="even" role="row">
                <td class="text-center sorting_1">
                    6
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/nem.png" class="currency-logo" alt="NEM">
                    <a href="https://coinmarketcap.com/currencies/nem/">NEM</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="91904399.9898" data-btc="135620.999985">

                      $ 91,904,400

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/nem/#markets" class="price" data-usd="0.0102116" data-btc="1.5069e-05">$ 0.010212</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://nembex.nem.ninja/" data-supply="8999999999.0">

                          8,999,999,999
                          XEM
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/nem/#markets" class="volume" data-usd="3766190.0" data-btc="5557.68">$ 3,766,190</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-17.40" data-btc="-18.28">-17.40 %</td>

                <td><a href="https://coinmarketcap.com/currencies/nem/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/873.png"></a></td>
            </tr><tr id="id-dash" class="odd" role="row">
                <td class="text-center sorting_1">
                    7
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/dash.png" class="currency-logo" alt="Dash">
                    <a href="https://coinmarketcap.com/currencies/dash/">Dash</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="47624596.2293" data-btc="70278.376332">

                      $ 47,624,596

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/dash/#markets" class="price" data-usd="7.26197" data-btc="0.0107163">$ 7.26</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/dash/" data-supply="6558082.20487">

                          6,558,082
                          DASH
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/dash/#markets" class="volume" data-usd="252065.0" data-btc="371.966">$ 252,065</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="2.13" data-btc="1.06">2.13 %</td>

                <td><a href="https://coinmarketcap.com/currencies/dash/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/131.png"></a></td>
            </tr><tr id="id-maidsafecoin" class="even" role="row">
                <td class="text-center sorting_1">
                    8
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/maidsafecoin.png" class="currency-logo" alt="MaidSafeCoin">
                    <a href="https://coinmarketcap.com/assets/maidsafecoin/">MaidSafeCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="33602107.1015" data-btc="49585.7152304">

                      $ 33,602,107

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/maidsafecoin/#markets" class="price" data-usd="0.0742502" data-btc="0.000109569">$ 0.074250</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://omnichest.info/lookupsp.aspx?sp=3" data-supply="452552412.0">

                          452,552,412
                          MAID
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/maidsafecoin/#markets" class="volume" data-usd="159303.0" data-btc="235.08">$ 159,303</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-1.49" data-btc="-2.54">-1.49 %</td>

                <td><a href="https://coinmarketcap.com/assets/maidsafecoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/291.png"></a></td>
            </tr><tr id="id-lisk" class="odd" role="row">
                <td class="text-center sorting_1">
                    9
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/lisk.png" class="currency-logo" alt="Lisk">
                    <a href="https://coinmarketcap.com/currencies/lisk/">Lisk</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="32676600.0" data-btc="48220.1">

                      $ 32,676,600

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/lisk/#markets" class="price" data-usd="0.326766" data-btc="0.000482201">$ 0.326766</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://explorer.lisk.io/" class="stale" data-supply="100000000.0">

                          100,000,000
                          LSK
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/lisk/#markets" class="volume" data-usd="652738.0" data-btc="963.228">$ 652,738</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="5.63" data-btc="4.50">5.63 %</td>

                <td><a href="https://coinmarketcap.com/currencies/lisk/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1214.png"></a></td>
            </tr><tr id="id-dogecoin" class="even" role="row">
                <td class="text-center sorting_1">
                    10
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/dogecoin.png" class="currency-logo" alt="Dogecoin">
                    <a href="https://coinmarketcap.com/currencies/dogecoin/">Dogecoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="31640620.506" data-btc="46691.2594261">

                      $ 31,640,621

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/dogecoin/#markets" class="price" data-usd="0.000301372" data-btc="4.44727e-07">$ 0.000301</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://dogechain.info/chain/Dogecoin" data-supply="1.04988587214e+11">

                          104,988,587,214
                          DOGE
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/dogecoin/#markets" class="volume" data-usd="282067.0" data-btc="416.239">$ 282,067</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-0.37" data-btc="-1.43">-0.37 %</td>

                <td><a href="https://coinmarketcap.com/currencies/dogecoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/74.png"></a></td>
            </tr><tr id="id-digixdao" class="odd" role="row">
                <td class="text-center sorting_1">
                    11
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/digixdao.png" class="currency-logo" alt="DigixDAO">
                    <a href="https://coinmarketcap.com/assets/digixdao/">DigixDAO</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="20671200.0" data-btc="30504.0">

                      $ 20,671,200

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/digixdao/#markets" class="price" data-usd="10.3356" data-btc="0.015252">$ 10.34</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://etherscan.io/token/dgd" data-supply="2000000.0">

                          2,000,000
                          DGD
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/digixdao/#markets" class="volume" data-usd="31048.5" data-btc="45.8175">$ 31,049</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-1.15" data-btc="-2.21">-1.15 %</td>

                <td><a href="https://coinmarketcap.com/assets/digixdao/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1229.png"></a></td>
            </tr><tr id="id-monero" class="even" role="row">
                <td class="text-center sorting_1">
                    12
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/monero.png" class="currency-logo" alt="Monero">
                    <a href="https://coinmarketcap.com/currencies/monero/">Monero</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="20521033.6726" data-btc="30282.3942172">

                      $ 20,521,034

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/monero/#markets" class="price" data-usd="1.66933" data-btc="0.00246339">$ 1.67</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://chainradar.com/xmr/blocks" data-supply="12292976.0278">

                          12,292,976
                          XMR
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/monero/#markets" class="volume" data-usd="156293.0" data-btc="230.638">$ 156,293</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="5.25" data-btc="4.12">5.25 %</td>

                <td><a href="https://coinmarketcap.com/currencies/monero/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/328.png"></a></td>
            </tr><tr id="id-nxt" class="odd" role="row">
                <td class="text-center sorting_1">
                    13
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/nxt.png" class="currency-logo" alt="Nxt">
                    <a href="https://coinmarketcap.com/currencies/nxt/">Nxt</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="20240239.4797" data-btc="29868.0020701">

                      $ 20,240,239

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/nxt/#markets" class="price" data-usd="0.0202605" data-btc="2.98979e-05">$ 0.020261</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://www.mynxt.info/blockexplorer/" data-supply="998999999.0">

                          998,999,999
                          NXT
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/nxt/#markets" class="volume" data-usd="809135.0" data-btc="1194.02">$ 809,135</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-9.20" data-btc="-10.17">-9.20 %</td>

                <td><a href="https://coinmarketcap.com/currencies/nxt/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/66.png"></a></td>
            </tr><tr id="id-steem" class="even" role="row">
                <td class="text-center sorting_1">
                    14
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/steem.png" class="currency-logo" alt="Steem">
                    <a href="https://coinmarketcap.com/currencies/steem/">Steem</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="16671607.4917" data-btc="24601.9334828">

                      $ 16,671,607

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/steem/#markets" class="price" data-usd="0.237383" data-btc="0.000350301">$ 0.237383</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://steemd.com/" data-supply="70230840.0">

                          70,230,840
                          STEEM
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/steem/#markets" class="volume" data-usd="6186.56" data-btc="9.12936">$ 6,187</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-11.36" data-btc="-12.30">-11.36 %</td>

                <td><a href="https://coinmarketcap.com/currencies/steem/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1230.png"></a></td>
            </tr><tr id="id-synereo" class="odd" role="row">
                <td class="text-center sorting_1">
                    15
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/synereo.png" class="currency-logo" alt="Synereo">
                    <a href="https://coinmarketcap.com/assets/synereo/">Synereo</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="15243948.72" data-btc="22495.1496">

                      $ 15,243,949

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/synereo/#markets" class="price" data-usd="0.0824889" data-btc="0.000121727">$ 0.082489</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://omnichest.info/lookupsp.aspx?sp=39" class="stale" data-supply="184800000.0">

                          184,800,000
                          AMP
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/synereo/#markets" class="volume" data-usd="27476.9" data-btc="40.5469">$ 27,477</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="5.80" data-btc="4.67">5.80 %</td>

                <td><a href="https://coinmarketcap.com/assets/synereo/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1125.png"></a></td>
            </tr><tr id="id-waves" class="even" role="row">
                <td class="text-center sorting_1">
                    16
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/waves.png" class="currency-logo" alt="Waves">
                    <a href="https://coinmarketcap.com/currencies/waves/">Waves</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="13912900.0" data-btc="20530.9">

                      $ 13,912,900

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/waves/#markets" class="price" data-usd="0.139129" data-btc="0.000205309">$ 0.139129</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://wavesexplorer.com/" data-supply="100000000.0">

                          100,000,000
                          WAVES
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/waves/#markets" class="volume" data-usd="274625.0" data-btc="405.257">$ 274,625</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-3.50" data-btc="-4.53">-3.50 %</td>

                <td><a href="https://coinmarketcap.com/currencies/waves/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1274.png"></a></td>
            </tr><tr id="id-emercoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    17
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/emercoin.png" class="currency-logo" alt="Emercoin">
                    <a href="https://coinmarketcap.com/currencies/emercoin/">Emercoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="13022130.343" data-btc="19216.4072757">

                      $ 13,022,130

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/emercoin/#markets" class="price" data-usd="0.342378" data-btc="0.000505238">$ 0.342378</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://emercoin.mintr.org/" data-supply="38034366.5276">

                          38,034,367
                          EMC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/emercoin/#markets" class="volume" data-usd="401307.0" data-btc="592.199">$ 401,307</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="59.41" data-btc="57.70">59.41 %</td>

                <td><a href="https://coinmarketcap.com/currencies/emercoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/558.png"></a></td>
            </tr><tr id="id-factom" class="even" role="row">
                <td class="text-center sorting_1">
                    18
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/factom.png" class="currency-logo" alt="Factom">
                    <a href="https://coinmarketcap.comhttps://coinmarketcap.com/currencies/factom/">Factom</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="12941284.1627" data-btc="19097.0729567">

                      $ 12,941,284

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/factom/#markets" class="price" data-usd="1.47846" data-btc="0.00218172">$ 1.48</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://explorer.factom.org/" class="stale" data-supply="8753219.0">

                          8,753,219
                          FCT
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/factom/#markets" class="volume" data-usd="911639.0" data-btc="1345.28">$ 911,639</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="0.24" data-btc="-0.83">0.24 %</td>

                <td><a href="https://coinmarketcap.com/currencies/factom/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1087.png"></a></td>
            </tr><tr id="id-siacoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    19
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/siacoin.png" class="currency-logo" alt="Siacoin">
                    <a href="https://coinmarketcap.com/currencies/siacoin/">Siacoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="12940527.9528" data-btc="19096.0692231">

                      $ 12,940,528

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/siacoin/#markets" class="price" data-usd="0.000821913" data-btc="1.21288e-06">$ 0.000822</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://explore.sia.tech/" data-supply="15744401114.0">

                          15,744,401,114
                          SC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/siacoin/#markets" class="volume" data-usd="816596.0" data-btc="1205.03">$ 816,596</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="7.48" data-btc="6.34">7.48 %</td>

                <td><a href="https://coinmarketcap.com/currencies/siacoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1042.png"></a></td>
            </tr><tr id="id-bitshares" class="even" role="row">
                <td class="text-center sorting_1">
                    20
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/bitshares.png" class="currency-logo" alt="BitShares">
                    <a href="https://coinmarketcap.com/currencies/bitshares/">BitShares</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="12155794.308" data-btc="17938.0037403">

                      $ 12,155,794

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bitshares/#markets" class="price" data-usd="0.0047396" data-btc="6.99411e-06">$ 0.004740</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://cryptofresh.com/" data-supply="2564730000.0">

                          2,564,730,000
                          BTS
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bitshares/#markets" class="volume" data-usd="334961.0" data-btc="494.294">$ 334,961</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-2.53" data-btc="-3.57">-2.53 %</td>

                <td><a href="/currencies/bitshares/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/463.png"></a></td>
            </tr><tr id="id-bluecoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    21
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/bluecoin.png" class="currency-logo" alt="BlueCoin">
                    <a href="https://coinmarketcap.com/currencies/bluecoin/">BlueCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="11839819.3775" data-btc="17471.6852384">

                      $ 11,839,819

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bluecoin/#markets" class="price" data-usd="0.0207042" data-btc="3.05526e-05">$ 0.020704</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://blockexperts.com/blu" data-supply="571855921.865">

                          571,855,922
                          BLU
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bluecoin/#markets" class="volume" data-usd="5412.53" data-btc="7.98713">$ 5,413</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="1783.09" data-btc="1762.97">1783.09 %</td>

                <td><a href="https://coinmarketcap.com/currencies/bluecoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/290.png"></a></td>
            </tr><tr id="id-stellar" class="even" role="row">
                <td class="text-center sorting_1">
                    22
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/stellar.png" class="currency-logo" alt="Stellar">
                    <a href="https://coinmarketcap.com/currencies/stellar/">Stellar</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="11185081.2731" data-btc="16505.5322016">

                      $ 11,185,081

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/stellar/#markets" class="price" data-usd="0.00203896" data-btc="3.00884e-06">$ 0.002039</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://www.stellar.org/stats/" data-supply="5485679598.0">

                          5,485,679,598
                          XLM
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/stellar/#markets" class="volume" data-usd="80441.4" data-btc="118.705">$ 80,441</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-2.94" data-btc="-3.98">-2.94 %</td>

                <td><a href="https://coinmarketcap.com/currencies/stellar/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/512.png"></a></td>
            </tr><tr id="id-peercoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    23
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/peercoin.png" class="currency-logo" alt="Peercoin">
                    <a href="https://coinmarketcap.com/currencies/peercoin/">Peercoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="9848035.79604" data-btc="14532.5002076">

                      $ 9,848,036

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/peercoin/#markets" class="price" data-usd="0.423001" data-btc="0.000624212">$ 0.423001</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/ppc/" data-supply="23281353.4626">

                          23,281,353
                          PPC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/peercoin/#markets" class="volume" data-usd="75265.8" data-btc="111.068">$ 75,266</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-0.08" data-btc="-1.15">-0.08 %</td>

                <td><a href="https://coinmarketcap.com/currencies/peercoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/5.png"></a></td>
            </tr><tr id="id-bytecoin-bcn" class="even" role="row">
                <td class="text-center sorting_1">
                    24
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/bytecoin-bcn.png" class="currency-logo" alt="Bytecoin">
                    <a href="https://coinmarketcap.com/currencies/bytecoin-bcn/">Bytecoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="7326591.31149" data-btc="10811.6702397">

                      $ 7,326,591

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bytecoin-bcn/#markets" class="price" data-usd="4.05453e-05" data-btc="5.98317e-08">$ 0.000041</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://chainradar.com/bcn/blocks" data-supply="1.80701371342e+11">

                          180,701,371,342
                          BCN
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bytecoin-bcn/#markets" class="volume" data-usd="2549.76" data-btc="3.76262">$ 2,550</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-7.32" data-btc="-8.30">-7.32 %</td>

                <td><a href="https://coinmarketcap.com/currencies/bytecoin-bcn/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/372.png"></a></td>
            </tr><tr id="id-counterparty" class="odd" role="row">
                <td class="text-center sorting_1">
                    25
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/counterparty.png" class="currency-logo" alt="Counterparty">
                    <a href="https://coinmarketcap.com/currencies/counterparty/">Counterparty</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="6756634.39374" data-btc="9970.61877011">

                      $ 6,756,634

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/counterparty/#markets" class="price" data-usd="2.5726" data-btc="0.00379633">$ 2.57</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://www.blockscan.com/" data-supply="2626383.57838">

                          2,626,384
                          XCP
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/counterparty/#markets" class="volume" data-usd="78831.3" data-btc="116.329">$ 78,831</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="11.02" data-btc="9.84">11.02 %</td>

                <td><a href="https://coinmarketcap.com/currencies/counterparty/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/132.png"></a></td>
            </tr><tr id="id-tether" class="even" role="row">
                <td class="text-center sorting_1">
                    26
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/tether.png" class="currency-logo" alt="Tether">
                    <a href="https://coinmarketcap.com/assets/tether/">Tether</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="5951591.0" data-btc="8782.64380688">

                      $ 5,951,591

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/tether/#markets" class="price" data-usd="1.0" data-btc="0.00147568">$ 1.00</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://omnichest.info/lookupsp.aspx?sp=31" data-supply="5951591.0">

                          5,951,591
                          USDT
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/tether/#markets" class="volume" data-usd="1084100.0" data-btc="1599.77">$ 1,084,100</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="0.00" data-btc="-1.07">0.00 %</td>

                <td><a href="https://coinmarketcap.com/assets/tether/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/825.png"></a></td>
            </tr><tr id="id-ybcoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    27
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/ybcoin.png" class="currency-logo" alt="YbCoin">
                    <a href="https://coinmarketcap.com/currencies/ybcoin/">YbCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="5835631.81907" data-btc="8611.48642093">

                      $ 5,835,632

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ybcoin/#markets" class="price" data-usd="1.93841" data-btc="0.00286046">$ 1.94</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://explorer_ybc.taiyilabs.com/" data-supply="3010525.02777">

                          3,010,525
                          YBC
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ybcoin/#markets" class="volume" data-usd="14756.2" data-btc="21.7753">$ 14,756</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="0.21" data-btc="-0.85">0.21 %</td>

                <td><a href="https://coinmarketcap.com/currencies/ybcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/95.png"></a></td>
            </tr><tr id="id-namecoin" class="even" role="row">
                <td class="text-center sorting_1">
                    28
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/namecoin.png" class="currency-logo" alt="Namecoin">
                    <a href="https://coinmarketcap.com/currencies/namecoin/">Namecoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="5827140.7039" data-btc="8598.9685279">

                      $ 5,827,141

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/namecoin/#markets" class="price" data-usd="0.397582" data-btc="0.000586702">$ 0.397582</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://explorer.namecoin.info" data-supply="14656450.0">

                          14,656,450
                          NMC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/namecoin/#markets" class="volume" data-usd="45437.7" data-btc="67.0513">$ 45,438</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="0.61" data-btc="-0.45">0.61 %</td>

                <td><a href="https://coinmarketcap.com/currencies/namecoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/3.png"></a></td>
            </tr><tr id="id-storjcoin-x" class="odd" role="row">
                <td class="text-center sorting_1">
                    29
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/storjcoin-x.png" class="currency-logo" alt="Storjcoin X">
                    <a href="https://coinmarketcap.com/assets/storjcoin-x/">Storjcoin X</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="5630212.8591" data-btc="8308.35210511">

                      $ 5,630,213

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/storjcoin-x/#markets" class="price" data-usd="0.1137" data-btc="0.000167784">$ 0.113700</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://blockscan.com/assetInfo.aspx?q=SJCX" data-supply="49518143.0">

                          49,518,143
                          SJCX
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/storjcoin-x/#markets" class="volume" data-usd="42893.3" data-btc="63.2965">$ 42,893</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="7.08" data-btc="5.94">7.08 %</td>

                <td><a href="https://coinmarketcap.com/assets/storjcoin-x/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/549.png"></a></td>
            </tr><tr id="id-nautiluscoin" class="even" role="row">
                <td class="text-center sorting_1">
                    30
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/nautiluscoin.png" class="currency-logo" alt="NautilusCoin">
                    <a href="https://coinmarketcap.com/assets/nautiluscoin/">NautilusCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="5182456.57528" data-btc="7647.618312">

                      $ 5,182,457

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/nautiluscoin/#markets" class="price" data-usd="0.403936" data-btc="0.000596078">$ 0.403936</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://nxtportal.org/currencies/18154834130337484019" data-supply="12829895.2687">

                          12,829,895
                          NAUT
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/nautiluscoin/#markets" class="volume" data-usd="87379.9" data-btc="128.944">$ 87,380</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-4.54" data-btc="-5.56">-4.54 %</td>

                <td><a href="https://coinmarketcap.com/assets/nautiluscoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/321.png"></a></td>
            </tr><tr id="id-agoras-tokens" class="odd" role="row">
                <td class="text-center sorting_1">
                    31
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/agoras-tokens.png" class="currency-logo" alt="Agoras Tokens">
                    <a href="https://coinmarketcap.com/assets/agoras-tokens/">Agoras Tokens</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="4695852.0" data-btc="6929.58">

                      $ 4,695,852

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/agoras-tokens/#markets" class="price" data-usd="0.111806" data-btc="0.00016499">$ 0.111806</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://omnichest.info/lookupsp.aspx?sp=35" data-supply="42000000.0">

                          42,000,000
                          AGRS
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/agoras-tokens/#markets" class="volume" data-usd="3657.77" data-btc="5.39769">$ 3,658</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="33.68" data-btc="32.26">33.68 %</td>

                <td><a href="https://coinmarketcap.com/assets/agoras-tokens/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1037.png"></a></td>
            </tr><tr id="id-fedoracoin" class="even" role="row">
                <td class="text-center sorting_1">
                    32
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/fedoracoin.png" class="currency-logo" alt="FedoraCoin">
                    <a href="https://coinmarketcap.com/currencies/fedoracoin/">FedoraCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="4109033.05894" data-btc="6063.58587497">

                      $ 4,109,033

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/fedoracoin/#markets" class="price" data-usd="9.60979e-06" data-btc="1.41809e-08">$ 0.000010</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/tips/" data-supply="4.27588226063e+11">

                          427,588,226,063
                          TIPS
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/fedoracoin/#markets" class="volume" data-usd="9809.01" data-btc="14.4749">$ 9,809</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-9.51" data-btc="-10.48">-9.51 %</td>

                <td><a href="https://coinmarketcap.com/currencies/fedoracoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/87.png"></a></td>
            </tr><tr id="id-decred" class="odd" role="row">
                <td class="text-center sorting_1">
                    33
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/decred.png" class="currency-logo" alt="Decred">
                    <a href="https://coinmarketcap.com/currencies/decred/">Decred</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="4022948.26269" data-btc="5936.57063454">

                      $ 4,022,948

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/decred/#markets" class="price" data-usd="1.97752" data-btc="0.00291818">$ 1.98</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://mainnet.decred.org/" data-supply="2034340.11423">

                          2,034,340
                          DCR
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/decred/#markets" class="volume" data-usd="24118.5" data-btc="35.5911">$ 24,119</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-4.54" data-btc="-5.56">-4.54 %</td>

                <td><a href="https://coinmarketcap.com/currencies/decred/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1168.png"></a></td>
            </tr><tr id="id-gamecredits" class="even" role="row">
                <td class="text-center sorting_1">
                    34
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/gamecredits.png" class="currency-logo" alt="GameCredits">
                    <a href="https://coinmarketcap.com/currencies/gamecredits/">GameCredits</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="3598626.00287" data-btc="5310.40283317">

                      $ 3,598,626

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/gamecredits/#markets" class="price" data-usd="0.0643559" data-btc="9.49684e-05">$ 0.064356</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://gmc.cryptocloudhosting.org:3001/" data-supply="55917577.1433">

                          55,917,577
                          GAME
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/gamecredits/#markets" class="volume" data-usd="48331.0" data-btc="71.3208">$ 48,331</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-5.24" data-btc="-6.25">-5.24 %</td>

                <td><a href="https://coinmarketcap.com/currencies/gamecredits/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/576.png"></a></td>
            </tr><tr id="id-syscoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    35
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/syscoin.png" class="currency-logo" alt="SysCoin">
                    <a href="https://coinmarketcap.com/currencies/syscoin/">SysCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="3510771.51332" data-btc="5180.77569918">

                      $ 3,510,772

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/syscoin/#markets" class="price" data-usd="0.00818836" data-btc="1.20834e-05">$ 0.008188</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://blockexperts.com/sys" class="stale" data-supply="428751485.441">

                          428,751,485
                          SYS
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/syscoin/#markets" class="volume" data-usd="47762.3" data-btc="70.4816">$ 47,762</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="1.12" data-btc="0.04">1.12 %</td>

                <td><a href="https://coinmarketcap.com/currencies/syscoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/541.png"></a></td>
            </tr><tr id="id-vpncoin" class="even" role="row">
                <td class="text-center sorting_1">
                    36
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/vpncoin.png" class="currency-logo" alt="VPNCoin">
                    <a href="https://coinmarketcap.com/currencies/vpncoin/">VPNCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="3425843.32204" data-btc="5055.45027851">

                      $ 3,425,843

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/vpncoin/#markets" class="price" data-usd="0.00855734" data-btc="1.26279e-05">$ 0.008557</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://blockexperts.com/vpn" class="stale" data-supply="400339746.0">

                          400,339,746
                          VPN
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/vpncoin/#markets" class="volume" data-usd="57064.2" data-btc="84.2082">$ 57,064</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-5.52" data-btc="-6.53">-5.52 %</td>

                <td><a href="https://coinmarketcap.com/currencies/vpncoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/735.png"></a></td>
            </tr><tr id="id-xaurum" class="odd" role="row">
                <td class="text-center sorting_1">
                    37
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/xaurum.png" class="currency-logo" alt="Xaurum">
                    <a href="https://coinmarketcap.com/currencies/xaurum/">Xaurum</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="3419720.56209" data-btc="5046.39424243">

                      $ 3,419,721

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/xaurum/#markets" class="price" data-usd="456.783" data-btc="0.674063">$ 456.78</a>
                </td>
                <td class="no-wrap text-right">

                        <span class="stale" data-supply="7486.532034">


                          7,487
                          XAU
                        </span>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/xaurum/#markets" class="volume" data-usd="5081.83" data-btc="7.49913">$ 5,082</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-1.08" data-btc="-2.14">-1.08 %</td>

                <td><a href="https://coinmarketcap.com/currencies/xaurum/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/895.png"></a></td>
            </tr><tr id="id-solarcoin" class="even" role="row">
                <td class="text-center sorting_1">
                    38
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/solarcoin.png" class="currency-logo" alt="SolarCoin">
                    <a href="https://coinmarketcap.com/currencies/solarcoin/">SolarCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="3324221.58741" data-btc="4905.47594441">

                      $ 3,324,222

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/solarcoin/#markets" class="price" data-usd="0.0967956" data-btc="0.000142839">$ 0.096796</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/slr/" data-supply="34342693.1329">

                          34,342,693
                          SLR
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/solarcoin/#markets" class="volume" data-usd="7384.85" data-btc="10.8976">$ 7,385</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-10.16" data-btc="-11.12">-10.16 %</td>

                <td><a href="https://coinmarketcap.com/currencies/solarcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/233.png"></a></td>
            </tr><tr id="id-hitcoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    39
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/hitcoin.png" class="currency-logo" alt="HitCoin">
                    <a href="https://coinmarketcap.com/currencies/hitcoin/">HitCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2981464.71514" data-btc="4399.681853">

                      $ 2,981,465

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/hitcoin/#markets" class="price" data-usd="0.000271133" data-btc="4.00105e-07">$ 0.000271</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://htcblockchain.com/" class="stale" data-supply="10996318099.0">

                          10,996,318,099
                          HTC
                        </a>


                        **

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/hitcoin/#markets" class="volume" data-usd="20439.0" data-btc="30.1613">$ 20,439</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="2.88" data-btc="1.78">2.88 %</td>

                <td><a href="https://coinmarketcap.com/currencies/hitcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1220.png"></a></td>
            </tr><tr id="id-scotcoin" class="even" role="row">
                <td class="text-center sorting_1">
                    40
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/scotcoin.png" class="currency-logo" alt="Scotcoin">
                    <a href="https://coinmarketcap.com/assets/scotcoin/">Scotcoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2731250.0" data-btc="4030.44">

                      $ 2,731,250

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/scotcoin/#markets" class="price" data-usd="0.00273125" data-btc="4.03044e-06">$ 0.002731</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://blockscan.com/assetInfo/SCOTCOIN" class="stale" data-supply="1000000000.0">

                          1,000,000,000
                          SCOT
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/scotcoin/#markets" class="volume" data-usd="6207.88" data-btc="9.16082">$ 6,208</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="4.88" data-btc="3.75">4.88 %</td>

                <td><a href="https://coinmarketcap.com/assets/scotcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/346.png"></a></td>
            </tr><tr id="id-feathercoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    41
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/feathercoin.png" class="currency-logo" alt="Feathercoin">
                    <a href="https://coinmarketcap.com/currencies/feathercoin/">Feathercoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2727267.53939" data-btc="4024.56627871">

                      $ 2,727,268

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/feathercoin/#markets" class="price" data-usd="0.0214921" data-btc="3.17154e-05">$ 0.021492</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://block.ftc-c.com/" data-supply="126896280.0">

                          126,896,280
                          FTC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/feathercoin/#markets" class="volume" data-usd="4963.7" data-btc="7.32481">$ 4,964</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-1.23" data-btc="-2.27">-1.23 %</td>

                <td><a href="https://coinmarketcap.com/currencies/feathercoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/8.png"></a></td>
            </tr><tr id="id-rubycoin" class="even" role="row">
                <td class="text-center sorting_1">
                    42
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/rubycoin.png" class="currency-logo" alt="Rubycoin">
                    <a href="https://coinmarketcap.com/currencies/rubycoin/">Rubycoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2673115.71515" data-btc="3944.64682222">

                      $ 2,673,116

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/rubycoin/#markets" class="price" data-usd="0.115205" data-btc="0.000170005">$ 0.115205</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://chainz.cryptoid.info/rby/" data-supply="23203122.3918">

                          23,203,122
                          RBY
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/rubycoin/#markets" class="volume" data-usd="6704.71" data-btc="9.89397">$ 6,705</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-2.75" data-btc="-3.79">-2.75 %</td>

                <td><a href="https://coinmarketcap.com/currencies/rubycoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/215.png"></a></td>
            </tr><tr id="id-bitcrystals" class="odd" role="row">
                <td class="text-center sorting_1">
                    43
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/bitcrystals.png" class="currency-logo" alt="Bitcrystals">
                    <a href="https://coinmarketcap.com/assets/bitcrystals/">Bitcrystals</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2623924.44456" data-btc="3872.05541162">

                      $ 2,623,924

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/bitcrystals/#markets" class="price" data-usd="0.0621952" data-btc="9.17798e-05">$ 0.062195</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://blockscan.com/assetInfo/BITCRYSTALS" data-supply="42188536.1661">

                          42,188,536
                          BCY
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/bitcrystals/#markets" class="volume" data-usd="14325.3" data-btc="21.1395">$ 14,325</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-7.07" data-btc="-8.06">-7.07 %</td>

                <td><a href="https://coinmarketcap.com/assets/bitcrystals/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1063.png"></a></td>
            </tr><tr id="id-bitcoindark" class="even" role="row">
                <td class="text-center sorting_1">
                    44
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/bitcoindark.png" class="currency-logo" alt="BitcoinDark">
                    <a href="https://coinmarketcap.com/currencies/bitcoindark/">BitcoinDark</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2544037.99692" data-btc="3754.17554043">

                      $ 2,544,038

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bitcoindark/#markets" class="price" data-usd="1.99884" data-btc="0.00294964">$ 2.00</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://explorebtcd.info/" data-supply="1272757.19764">

                          1,272,757
                          BTCD
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bitcoindark/#markets" class="volume" data-usd="2873.02" data-btc="4.23964">$ 2,873</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-8.87" data-btc="-9.84">-8.87 %</td>

                <td><a href="https://coinmarketcap.com/currencies/bitcoindark/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/467.png"></a></td>
            </tr><tr id="id-blackcoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    45
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/blackcoin.png" class="currency-logo" alt="BlackCoin">
                    <a href="https://coinmarketcap.com/currencies/blackcoin/">BlackCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2491683.68974" data-btc="3676.92203338">

                      $ 2,491,684

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/blackcoin/#markets" class="price" data-usd="0.0329944" data-btc="4.86891e-05">$ 0.032994</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/blk/" data-supply="75518381.5962">

                          75,518,382
                          BLK
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/blackcoin/#markets" class="volume" data-usd="31085.4" data-btc="45.872">$ 31,085</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-5.51" data-btc="-6.52">-5.51 %</td>

                <td><a href="https://coinmarketcap.com/currencies/blackcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/170.png"></a></td>
            </tr><tr id="id-digibyte" class="even" role="row">
                <td class="text-center sorting_1">
                    46
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/digibyte.png" class="currency-logo" alt="DigiByte">
                    <a href="https://coinmarketcap.com/currencies/digibyte/">DigiByte</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2284337.39709" data-btc="3370.94149634">

                      $ 2,284,337

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/digibyte/#markets" class="price" data-usd="0.00033884" data-btc="5.00018e-07">$ 0.000339</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://digiexplorer.info" data-supply="6741640293.63">

                          6,741,640,294
                          DGB
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/digibyte/#markets" class="volume" data-usd="76364.9" data-btc="112.69">$ 76,365</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-6.57" data-btc="-7.57">-6.57 %</td>

                <td><a href="https://coinmarketcap.com/currencies/digibyte/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/109.png"></a></td>
            </tr><tr id="id-gridcoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    47
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/gridcoin.png" class="currency-logo" alt="GridCoin">
                    <a href="https://coinmarketcap.com/currencies/gridcoin/">GridCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2187789.09409" data-btc="3228.46459712">

                      $ 2,187,789

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/gridcoin/#markets" class="price" data-usd="0.00579125" data-btc="8.546e-06">$ 0.005791</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://www.gridresearchcorp.com/gridcoin/" data-supply="377774935.306">

                          377,774,935
                          GRC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/gridcoin/#markets" class="volume" data-usd="3846.01" data-btc="5.67546">$ 3,846</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-0.58" data-btc="-1.65">-0.58 %</td>

                <td><a href="https://coinmarketcap.com/currencies/gridcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/833.png"></a></td>
            </tr><tr id="id-kilocoin" class="even" role="row">
                <td class="text-center sorting_1">
                    48
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/kilocoin.png" class="currency-logo" alt="KiloCoin">
                    <a href="https://coinmarketcap.com/currencies/kilocoin/">KiloCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2101936.61011" data-btc="3101.7728638">

                      $ 2,101,937

                </td>
                <td class="no-wrap text-right">
                    <a href="/currencies/kilocoin/#markets" class="price" data-usd="0.000467583" data-btc="6.9e-07">$ 0.000468</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://klc.cryptocoinexplorer.com/" data-supply="4495322991.01">

                          4,495,322,991
                          KLC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/kilocoin/#markets" class="volume" data-usd="11.6559" data-btc="0.0172004">$ 12</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="178.98" data-btc="176.00">178.98 %</td>

                <td><a href="https://coinmarketcap.com/currencies/kilocoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1182.png"></a></td>
            </tr><tr id="id-voxels" class="odd" role="row">
                <td class="text-center sorting_1">
                    49
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/voxels.png" class="currency-logo" alt="Voxels">
                    <a href="https://coinmarketcap.com/currencies/voxels/">Voxels</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2068094.7" data-btc="3051.8334">

                      $ 2,068,095

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/voxels/#markets" class="price" data-usd="0.0656538" data-btc="9.68836e-05">$ 0.065654</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://www.blockexperts.com/vox" data-supply="31500000.0">

                          31,500,000
                          VOX
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/voxels/#markets" class="volume" data-usd="59912.0" data-btc="88.4107">$ 59,912</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-2.27" data-btc="-3.31">-2.27 %</td>

                <td><a href="https://coinmarketcap.com/currencies/voxels/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1208.png"></a></td>
            </tr><tr id="id-mintcoin" class="even" role="row">
                <td class="text-center sorting_1">
                    50
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/mintcoin.png" class="currency-logo" alt="Mintcoin">
                    <a href="https://coinmarketcap.com/currencies/mintcoin/">Mintcoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="2019172.56598" data-btc="2979.64920465">

                      $ 2,019,173

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/mintcoin/#markets" class="price" data-usd="8.7494e-05" data-btc="1.29113e-07">$ 0.000087</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/mint/" class="stale" data-supply="23077840377.4">

                          23,077,840,377
                          MINT
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/mintcoin/#markets" class="volume" data-usd="2072.45" data-btc="3.05826">$ 2,072</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="16.65" data-btc="15.40">16.65 %</td>

                <td><a href="https://coinmarketcap.com/currencies/mintcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/141.png"></a></td>
            </tr><tr id="id-earthcoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    51
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/earthcoin.png" class="currency-logo" alt="EarthCoin">
                    <a href="https://coinmarketcap.com/currencies/earthcoin/">EarthCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1910231.19779" data-btc="2818.8855026">

                      $ 1,910,231

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/earthcoin/#markets" class="price" data-usd="0.00020438" data-btc="3.01599e-07">$ 0.000204</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://earthchain.info/chain/EarthCoin" class="stale" data-supply="9346468332.45">

                          9,346,468,332
                          EAC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/earthcoin/#markets" class="volume" data-usd="170990.0" data-btc="252.326">$ 170,990</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-5.29" data-btc="-6.31">-5.29 %</td>

                <td><a href="https://coinmarketcap.com/currencies/earthcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/85.png"></a></td>
            </tr><tr id="id-monacoin" class="even" role="row">
                <td class="text-center sorting_1">
                    52
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/monacoin.png" class="currency-logo" alt="MonaCoin">
                    <a href="https://coinmarketcap.com/currencies/monacoin/">MonaCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1831614.51065" data-btc="2702.86663679">

                      $ 1,831,615

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/monacoin/#markets" class="price" data-usd="0.0519576" data-btc="7.66725e-05">$ 0.051958</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://mona.chainsight.info/" data-supply="35252099.9939">

                          35,252,100
                          MONA
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/monacoin/#markets" class="volume" data-usd="1827.85" data-btc="2.69731">$ 1,828</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-0.49" data-btc="-1.55">-0.49 %</td>

                <td><a href="https://coinmarketcap.com/currencies/monacoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/213.png"></a></td>
            </tr><tr id="id-vericoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    53
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/vericoin.png" class="currency-logo" alt="VeriCoin">
                    <a href="https://coinmarketcap.com/currencies/vericoin/">VeriCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1766921.0236" data-btc="2607.40081958">

                      $ 1,766,921

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/vericoin/#markets" class="price" data-usd="0.0638453" data-btc="9.42149e-05">$ 0.063845</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://chainz.cryptoid.info/vrc/" data-supply="27675036.7467">

                          27,675,037
                          VRC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/vericoin/#markets" class="volume" data-usd="14624.7" data-btc="21.5813">$ 14,625</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="10.48" data-btc="9.30">10.48 %</td>

                <td><a href="https://coinmarketcap.com/currencies/vericoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/323.png"></a></td>
            </tr><tr id="id-shadowcoin" class="even" role="row">
                <td class="text-center sorting_1">
                    54
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/shadowcoin.png" class="currency-logo" alt="ShadowCash">
                    <a href="https://coinmarketcap.com/currencies/shadowcoin/">ShadowCash</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1705273.91248" data-btc="2516.42691292">

                      $ 1,705,274

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/shadowcoin/#markets" class="price" data-usd="0.260309" data-btc="0.000384131">$ 0.260309</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://explorer.shadow.cash/chain/ShadowCash" data-supply="6550960.25293">

                          6,550,960
                          SDC
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/shadowcoin/#markets" class="volume" data-usd="19006.0" data-btc="28.0467">$ 19,006</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-13.62" data-btc="-14.54">-13.62 %</td>

                <td><a href="https://coinmarketcap.com/currencies/shadowcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/493.png"></a></td>
            </tr><tr id="id-supernet-unity" class="odd" role="row">
                <td class="text-center sorting_1">
                    55
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/supernet-unity.png" class="currency-logo" alt="SuperNET">
                    <a href="https://coinmarketcap.com/assets/supernet-unity/">SuperNET</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1553625.09222" data-btc="2292.64177312">

                      $ 1,553,625

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/supernet-unity/#markets" class="price" data-usd="1.90381" data-btc="0.0028094">$ 1.90</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://nxtreporting.com/?as=12071612744977229797" data-supply="816060.9999">

                          816,061
                          UNITY
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/supernet-unity/#markets" class="volume" data-usd="2129.25" data-btc="3.14208">$ 2,129</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-4.04" data-btc="-5.07">-4.04 %</td>

                <td><a href="https://coinmarketcap.com/assets/supernet-unity/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/643.png"></a></td>
            </tr><tr id="id-vcash" class="even" role="row">
                <td class="text-center sorting_1">
                    56
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/vcash.png" class="currency-logo" alt="Vcash">
                    <a href="https://coinmarketcap.com/currencies/vcash/">Vcash</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1508191.0564" data-btc="2225.59778883">

                      $ 1,508,191

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/vcash/#markets" class="price" data-usd="0.103653" data-btc="0.000152958">$ 0.103653</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://explorer.v.cash/" data-supply="14550385.0">

                          14,550,385
                          XVC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/vcash/#markets" class="volume" data-usd="18447.2" data-btc="27.222">$ 18,447</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-1.46" data-btc="-2.51">-1.46 %</td>

                <td><a href="https://coinmarketcap.com/currencies/vcash/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/836.png"></a></td>
            </tr><tr id="id-primecoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    57
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/primecoin.png" class="currency-logo" alt="Primecoin">
                    <a href="https://coinmarketcap.com/currencies/primecoin/">Primecoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1434232.23848" data-btc="2116.45575351">

                      $ 1,434,232

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/primecoin/#markets" class="price" data-usd="0.0947616" data-btc="0.000139837">$ 0.094762</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinplorer.com/XPM" data-supply="15135162.7503">

                          15,135,163
                          XPM
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/primecoin/#markets" class="volume" data-usd="15788.7" data-btc="23.299">$ 15,789</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-1.67" data-btc="-2.71">-1.67 %</td>

                <td><a href="https://coinmarketcap.com/currencies/primecoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/42.png"></a></td>
            </tr><tr id="id-auroracoin" class="even" role="row">
                <td class="text-center sorting_1">
                    58
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/auroracoin.png" class="currency-logo" alt="Auroracoin">
                    <a href="https://coinmarketcap.com/currencies/auroracoin/">Auroracoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1414355.28534" data-btc="2087.12397119">

                      $ 1,414,355

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/auroracoin/#markets" class="price" data-usd="0.171076" data-btc="0.000252452">$ 0.171076</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/aur/" data-supply="8267409.13597">

                          8,267,409
                          AUR
                        </a>


                        **

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/auroracoin/#markets" class="volume" data-usd="2589.26" data-btc="3.8209">$ 2,589</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="11.14" data-btc="9.96">11.14 %</td>

                <td><a href="https://coinmarketcap.com/currencies/auroracoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/148.png"></a></td>
            </tr><tr id="id-ion" class="odd" role="row">
                <td class="text-center sorting_1">
                    59
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/ion.png" class="currency-logo" alt="ION">
                    <a href="https://coinmarketcap.com/currencies/ion/">ION</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1405083.76588" data-btc="2073.44735825">

                      $ 1,405,084

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ion/#markets" class="price" data-usd="0.236796" data-btc="0.000349434">$ 0.236796</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://ionchain.com/" data-supply="5933731.0">

                          5,933,731
                          ION
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ion/#markets" class="volume" data-usd="357.464" data-btc="0.527501">$ 357</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="10.70" data-btc="9.52">10.70 %</td>

                <td><a href="https://coinmarketcap.com/currencies/ion/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1281.png"></a></td>
            </tr><tr id="id-quark" class="even" role="row">
                <td class="text-center sorting_1">
                    60
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/quark.png" class="currency-logo" alt="Quark">
                    <a href="https://coinmarketcap.com/currencies/quark/">Quark</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1390494.29404" data-btc="2051.91652495">

                      $ 1,390,494

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/quark/#markets" class="price" data-usd="0.00555973" data-btc="8.20435e-06">$ 0.005560</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinplorer.com/QRK/" data-supply="250101047.0">

                          250,101,047
                          QRK
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/quark/#markets" class="volume" data-usd="16758.3" data-btc="24.7298">$ 16,758</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-0.91" data-btc="-1.96">-0.91 %</td>

                <td><a href="https://coinmarketcap.com/currencies/quark/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/53.png"></a></td>
            </tr><tr id="id-omni" class="odd" role="row">
                <td class="text-center sorting_1">
                    61
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/omni.png" class="currency-logo" alt="Omni">
                    <a href="https://coinmarketcap.com/currencies/omni/">Omni</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1333066.59983" data-btc="1967.17093573">

                      $ 1,333,067

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/omni/#markets" class="price" data-usd="2.41012" data-btc="0.00355655">$ 2.41</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://omnichest.info/" data-supply="553112.127125">

                          553,112
                          OMNI
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/omni/#markets" class="volume" data-usd="3667.88" data-btc="5.4126">$ 3,668</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-11.04" data-btc="-11.99">-11.04 %</td>

                <td><a href="https://coinmarketcap.com/currencies/omni/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/83.png"></a></td>
            </tr><tr id="id-clams" class="even" role="row">
                <td class="text-center sorting_1">
                    62
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/clams.png" class="currency-logo" alt="Clams">
                    <a href="https://coinmarketcap.com/currencies/clams/">Clams</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1273200.25383" data-btc="1878.83628893">

                      $ 1,273,200

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/clams/#markets" class="price" data-usd="0.709666" data-btc="0.00104724">$ 0.709666</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://khashier.com/chain/Clam" data-supply="1794083.77156">

                          1,794,084
                          CLAM
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/clams/#markets" class="volume" data-usd="8746.58" data-btc="12.9071">$ 8,747</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="0.26" data-btc="-0.81">0.26 %</td>

                <td><a href="https://coinmarketcap.com/currencies/clams/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/460.png"></a></td>
            </tr><tr id="id-reddcoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    63
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/reddcoin.png" class="currency-logo" alt="ReddCoin">
                    <a href="https://coinmarketcap.com/currencies/reddcoin/">ReddCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1219277.71073" data-btc="1799.25890073">

                      $ 1,219,278

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/reddcoin/#markets" class="price" data-usd="4.33297e-05" data-btc="6.39406e-08">$ 0.000043</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://live.reddcoin.com/" data-supply="28139537331.9">

                          28,139,537,332
                          RDD
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/reddcoin/#markets" class="volume" data-usd="4682.9" data-btc="6.91044">$ 4,683</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="2.87" data-btc="1.77">2.87 %</td>

                <td><a href="https://coinmarketcap.com/currencies/reddcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/118.png"></a></td>
            </tr><tr id="id-iocoin" class="even" role="row">
                <td class="text-center sorting_1">
                    64
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/iocoin.png" class="currency-logo" alt="I/O Coin">
                    <a href="https://coinmarketcap.com/currencies/iocoin/">I/O Coin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1119505.38616" data-btc="1652.0219883">

                      $ 1,119,505

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/iocoin/#markets" class="price" data-usd="0.0688385" data-btc="0.000101583">$ 0.068838</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://chainz.cryptoid.info/ioc/" data-supply="16262780.0745">

                          16,262,780
                          IOC
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/iocoin/#markets" class="volume" data-usd="2242.43" data-btc="3.3091">$ 2,242</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="3.17" data-btc="2.07">3.17 %</td>

                <td><a href="https://coinmarketcap.com/currencies/iocoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/495.png"></a></td>
            </tr><tr id="id-expanse" class="odd" role="row">
                <td class="text-center sorting_1">
                    65
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/expanse.png" class="currency-logo" alt="Expanse">
                    <a href="https://coinmarketcap.com/currencies/expanse/">Expanse</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1076024.69171" data-btc="1587.86318478">

                      $ 1,076,025

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/expanse/#markets" class="price" data-usd="0.52079" data-btc="0.000768517">$ 0.520790</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://www.expanse.tech/explorer" class="stale" data-supply="2066139.31088">

                          2,066,139
                          EXP
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/expanse/#markets" class="volume" data-usd="614763.0" data-btc="907.19">$ 614,763</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="11.62" data-btc="10.44">11.62 %</td>

                <td><a href="https://coinmarketcap.com/currencies/expanse/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1070.png"></a></td>
            </tr><tr id="id-novacoin" class="even" role="row">
                <td class="text-center sorting_1">
                    66
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/novacoin.png" class="currency-logo" alt="Novacoin">
                    <a href="https://coinmarketcap.com/currencies/novacoin/">Novacoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1064460.02822" data-btc="1570.79471525">

                      $ 1,064,460

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/novacoin/#markets" class="price" data-usd="0.749326" data-btc="0.00110576">$ 0.749326</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://explorer.novaco.in/" data-supply="1420556.64452">

                          1,420,557
                          NVC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/novacoin/#markets" class="volume" data-usd="55084.1" data-btc="81.2863">$ 55,084</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="1.48" data-btc="0.41">1.48 %</td>

                <td><a href="https://coinmarketcap.com/currencies/novacoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/6.png"></a></td>
            </tr><tr id="id-yocoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    67
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/yocoin.png" class="currency-logo" alt="Yocoin">
                    <a href="https://coinmarketcap.com/currencies/yocoin/">Yocoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="1007460.79948" data-btc="1486.68491402">

                      $ 1,007,461

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/yocoin/#markets" class="price" data-usd="0.0519737" data-btc="7.66963e-05">$ 0.051974</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://www.blockexperts.com/yoc" data-supply="19384050.0">

                          19,384,050
                          YOC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/yocoin/#markets" class="volume" data-usd="11600.5" data-btc="17.1185">$ 11,601</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="2.97" data-btc="1.87">2.97 %</td>

                <td><a href="https://coinmarketcap.com/currencies/yocoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1156.png"></a></td>
            </tr><tr id="id-ixcoin" class="even" role="row">
                <td class="text-center sorting_1">
                    68
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/ixcoin.png" class="currency-logo" alt="Ixcoin">
                    <a href="https://coinmarketcap.com/currencies/ixcoin/">Ixcoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="995827.150724" data-btc="1469.51617817">

                      $ 995,827

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ixcoin/#markets" class="price" data-usd="0.0474224" data-btc="6.998e-05">$ 0.047422</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/ixc/" data-supply="20999087.999">

                          20,999,088
                          IXC
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ixcoin/#markets" class="volume" data-usd="117.467" data-btc="0.173344">$ 117</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-10.47" data-btc="-11.42">-10.47 %</td>

                <td><a href="https://coinmarketcap.com/currencies/ixcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/13.png"></a></td>
            </tr><tr id="id-radium" class="odd" role="row">
                <td class="text-center sorting_1">
                    69
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/radium.png" class="currency-logo" alt="Radium">
                    <a href="https://coinmarketcap.com/currencies/radium/">Radium</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="979936.042635" data-btc="1446.06968801">

                      $ 979,936

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/radium/#markets" class="price" data-usd="0.347355" data-btc="0.000512584">$ 0.347355</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://chain.blockpioneers.info/radium/explorer.php" data-supply="2821137.0">

                          2,821,137
                          RADS
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/radium/#markets" class="volume" data-usd="12459.7" data-btc="18.3864">$ 12,460</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="18.70" data-btc="17.44">18.70 %</td>

                <td><a href="https://coinmarketcap.com/currencies/radium/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1154.png"></a></td>
            </tr><tr id="id-worldcoin" class="even" role="row">
                <td class="text-center sorting_1">
                    70
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/worldcoin.png" class="currency-logo" alt="WorldCoin">
                    <a href="https://coinmarketcap.com/currencies/worldcoin/">WorldCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="936667.292807" data-btc="1382.21098585">

                      $ 936,667

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/worldcoin/#markets" class="price" data-usd="0.00893432" data-btc="1.31841e-05">$ 0.008934</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://www.wdcexplorer.com/" data-supply="104839237.1">

                          104,839,237
                          WDC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/worldcoin/#markets" class="volume" data-usd="6417.17" data-btc="9.46966">$ 6,417</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-4.51" data-btc="-5.53">-4.51 %</td>

                <td><a href="https://coinmarketcap.com/currencies/worldcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/16.png"></a></td>
            </tr><tr id="id-vertcoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    71
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/vertcoin.png" class="currency-logo" alt="Vertcoin">
                    <a href="https://coinmarketcap.com/currencies/vertcoin/">Vertcoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="901447.794186" data-btc="1330.24425845">

                      $ 901,448

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/vertcoin/#markets" class="price" data-usd="0.0390632" data-btc="5.76446e-05">$ 0.039063</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://explorer.thisisvtc.com" class="stale" data-supply="23076649.9976">

                          23,076,650
                          VTC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/vertcoin/#markets" class="volume" data-usd="10423.8" data-btc="15.3821">$ 10,424</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-7.25" data-btc="-8.22">-7.25 %</td>

                <td><a href="https://coinmarketcap.com/currencies/vertcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/99.png"></a></td>
            </tr><tr id="id-gulden" class="even" role="row">
                <td class="text-center sorting_1">
                    72
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/gulden.png" class="currency-logo" alt="Gulden">
                    <a href="https://coinmarketcap.com/currencies/gulden/">Gulden</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="856747.273788" data-btc="1264.27925755">

                      $ 856,747

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/gulden/#markets" class="price" data-usd="0.0027468" data-btc="4.05338e-06">$ 0.002747</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://explorer.gulden.com" data-supply="311907410.0">

                          311,907,410
                          NLG
                        </a>


                        **

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/gulden/#markets" class="volume" data-usd="7933.2" data-btc="11.7068">$ 7,933</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="5.48" data-btc="4.35">5.48 %</td>

                <td><a href="https://coinmarketcap.com/currencies/gulden/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/254.png"></a></td>
            </tr><tr id="id-boostcoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    73
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/boostcoin.png" class="currency-logo" alt="BoostCoin">
                    <a href="https://coinmarketcap.com/currencies/boostcoin/">BoostCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="855093.609688" data-btc="1261.83877675">

                      $ 855,094

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/boostcoin/#markets" class="price" data-usd="0.0721264" data-btc="0.000106435">$ 0.072126</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://explorer.bost.link/" class="stale" data-supply="11855487.1682">

                          11,855,487
                          BOST
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/boostcoin/#markets" class="volume" data-usd="4206.04" data-btc="6.20675">$ 4,206</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-6.28" data-btc="-7.28">-6.28 %</td>

                <td><a href="https://coinmarketcap.com/currencies/boostcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/350.png"></a></td>
            </tr><tr id="id-rise" class="even" role="row">
                <td class="text-center sorting_1">
                    74
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/rise.png" class="currency-logo" alt="Rise">
                    <a href="https://coinmarketcap.com/currencies/rise/">Rise</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="815904.7362" data-btc="1204.0154095">

                      $ 815,905

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/rise/#markets" class="price" data-usd="0.00813265" data-btc="1.20012e-05">$ 0.008133</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://explorer.rise.vision/" data-supply="100324585.0">

                          100,324,585
                          RISE
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/rise/#markets" class="volume" data-usd="27804.2" data-btc="41.03">$ 27,804</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-3.32" data-btc="-4.36">-3.32 %</td>

                <td><a href="https://coinmarketcap.com/currencies/rise/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1294.png"></a></td>
            </tr><tr id="id-startcoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    75
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/startcoin.png" class="currency-logo" alt="Startcoin">
                    <a href="https://coinmarketcap.com/currencies/startcoin/">Startcoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="746367.968331" data-btc="1101.3938151">

                      $ 746,368

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/startcoin/#markets" class="price" data-usd="0.0165566" data-btc="2.44321e-05">$ 0.016557</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://explorer.startcoin.org" data-supply="45079785.0">

                          45,079,785
                          START
                        </a>


                        **

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/startcoin/#markets" class="volume" data-usd="955.89" data-btc="1.41058">$ 956</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-5.84" data-btc="-6.85">-5.84 %</td>

                <td><a href="https://coinmarketcap.com/currencies/startcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/389.png"></a></td>
            </tr><tr id="id-darknote" class="even" role="row">
                <td class="text-center sorting_1">
                    76
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/darknote.png" class="currency-logo" alt="DigitalNote">
                    <a href="https://coinmarketcap.com/currencies/darknote/">DigitalNote</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="728773.51759" data-btc="1075.43008849">

                      $ 728,774

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/darknote/#markets" class="price" data-usd="0.000106191" data-btc="1.56703e-07">$ 0.000106</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://chainradar.com/xdn/blocks" data-supply="6862855774.87">

                          6,862,855,775
                          XDN
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/darknote/#markets" class="volume" data-usd="7416.18" data-btc="10.9439">$ 7,416</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="2.57" data-btc="1.48">2.57 %</td>

                <td><a href="https://coinmarketcap.com/currencies/darknote/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/405.png"></a></td>
            </tr><tr id="id-trumpcoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    77
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/trumpcoin.png" class="currency-logo" alt="TrumpCoin">
                    <a href="https://coinmarketcap.com/currencies/trumpcoin/">TrumpCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="726865.114657" data-btc="1072.61238939">

                      $ 726,865

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/trumpcoin/#markets" class="price" data-usd="0.111792" data-btc="0.000164968">$ 0.111792</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://www.rainz.xyz/chainz/trump/" class="stale" data-supply="6501942.13054">

                          6,501,942
                          TRUMP
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/trumpcoin/#markets" class="volume" data-usd="118316.0" data-btc="174.595">$ 118,316</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-5.33" data-btc="-6.31">-5.33 %</td>

                <td><a href="https://coinmarketcap.com/currencies/trumpcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1185.png"></a></td>
            </tr><tr id="id-bilshares" class="even" role="row">
                <td class="text-center sorting_1">
                    78
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/bilshares.png" class="currency-logo" alt="BilShares">
                    <a href="https://coinmarketcap.com/currencies/bilshares/">BilShares</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="721264.0" data-btc="1064.35">

                      $ 721,264

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bilshares/#markets" class="price" data-usd="0.000721264" data-btc="1.06435e-06">$ 0.000721</a>
                </td>
                <td class="no-wrap text-right">

                        <span data-supply="1000000000.0">


                          1,000,000,000
                          BILS
                        </span>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/bilshares/#markets" class="volume" data-usd="9323.52" data-btc="13.7585">$ 9,324</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="2.01" data-btc="0.92">2.01 %</td>

                <td><a href="https://coinmarketcap.com/currencies/bilshares/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/562.png"></a></td>
            </tr><tr id="id-hempcoin-hmp" class="odd" role="row">
                <td class="text-center sorting_1">
                    79
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/hempcoin-hmp.png" class="currency-logo" alt="HempCoin">
                    <a href="https://coinmarketcap.com/currencies/hempcoin-hmp/">HempCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="700151.947687" data-btc="1033.19659072">

                      $ 700,152

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/hempcoin-hmp/#markets" class="price" data-usd="0.000516851" data-btc="7.62704e-07">$ 0.000517</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://hmp.cryptocoinexplorer.com/" data-supply="1354649497.99">

                          1,354,649,498
                          HMP
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/hempcoin-hmp/#markets" class="volume" data-usd="9009.89" data-btc="13.2957">$ 9,010</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="10.58" data-btc="9.39">10.58 %</td>

                <td><a href="https://coinmarketcap.com/currencies/hempcoin-hmp/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1173.png"></a></td>
            </tr><tr id="id-obits" class="even" role="row">
                <td class="text-center sorting_1">
                    80
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/obits.png" class="currency-logo" alt="Obits">
                    <a href="https://coinmarketcap.com/assets/obits/">Obits</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="696103.94505" data-btc="1027.21925539">

                      $ 696,104

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/obits/#markets" class="price" data-usd="0.102525" data-btc="0.000151293">$ 0.102525</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://cryptofresh.com/a/OBITS" data-supply="6789602.0">

                          6,789,602
                          OBITS
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/obits/#markets" class="volume" data-usd="564.245" data-btc="0.832642">$ 564</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-4.08" data-btc="-5.10">-4.08 %</td>

                <td><a href="https://coinmarketcap.com/assets/obits/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1123.png"></a></td>
            </tr><tr id="id-nushares" class="odd" role="row">
                <td class="text-center sorting_1">
                    81
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/nushares.png" class="currency-logo" alt="NuShares">
                    <a href="https://coinmarketcap.com/assets/nushares/">NuShares</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="681832.654348" data-btc="1006.16309836">

                      $ 681,833

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/nushares/#markets" class="price" data-usd="0.000737561" data-btc="1.0884e-06">$ 0.000738</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://blockexplorer.nu/" data-supply="924442391.0">

                          924,442,391
                          NSR
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/nushares/#markets" class="volume" data-usd="19153.3" data-btc="28.264">$ 19,153</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-26.44" data-btc="-27.22">-26.44 %</td>

                <td><a href="https://coinmarketcap.com/assets/nushares/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/699.png"></a></td>
            </tr><tr id="id-infinitecoin" class="even" role="row">
                <td class="text-center sorting_1">
                    82
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/infinitecoin.png" class="currency-logo" alt="Infinitecoin">
                    <a href="https://coinmarketcap.com/currencies/infinitecoin/">Infinitecoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="666377.27625" data-btc="983.359146756">

                      $ 666,377

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/infinitecoin/#markets" class="price" data-usd="7.35546e-06" data-btc="1.08543e-08">$ 0.000007</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://exploretheblocks.com:2750/chain/InfiniteCoin/" class="stale" data-supply="90596274910.1">

                          90,596,274,910
                          IFC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/infinitecoin/#markets" class="volume" data-usd="14477.5" data-btc="21.3641">$ 14,478</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="4.97" data-btc="3.87">4.97 %</td>

                <td><a href="https://coinmarketcap.com/currencies/infinitecoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/41.png"></a></td>
            </tr><tr id="id-diamond" class="odd" role="row">
                <td class="text-center sorting_1">
                    83
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/diamond.png" class="currency-logo" alt="Diamond">
                    <a href="https://coinmarketcap.com/currencies/diamond/">Diamond</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="665982.553589" data-btc="982.773216812">

                      $ 665,983

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/diamond/#markets" class="price" data-usd="0.398855" data-btc="0.00058858">$ 0.398855</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/dmd/" data-supply="1669736.00328">

                          1,669,736
                          DMD
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/diamond/#markets" class="volume" data-usd="713.701" data-btc="1.05319">$ 714</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="2.63" data-btc="1.55">2.63 %</td>

                <td><a href="https://coinmarketcap.com/currencies/diamond/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/77.png"></a></td>
            </tr><tr id="id-megacoin" class="even" role="row">
                <td class="text-center sorting_1">
                    84
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/megacoin.png" class="currency-logo" alt="Megacoin">
                    <a href="https://coinmarketcap.com/currencies/megacoin/">Megacoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="663764.503447" data-btc="979.50005076">

                      $ 663,765

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/megacoin/#markets" class="price" data-usd="0.0202397" data-btc="2.98672e-05">$ 0.020240</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://mec.blockr.io/" data-supply="32795175.0">

                          32,795,175
                          MEC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/megacoin/#markets" class="volume" data-usd="2070.15" data-btc="3.05487">$ 2,070</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-5.37" data-btc="-6.37">-5.37 %</td>

                <td><a href="https://coinmarketcap.com/currencies/megacoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/37.png"></a></td>
            </tr><tr id="id-coinshield" class="odd" role="row">
                <td class="text-center sorting_1">
                    85
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/coinshield.png" class="currency-logo" alt="Nexus">
                    <a href="https://coinmarketcap.com/currencies/coinshield/">Nexus</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="663383.145406" data-btc="978.937905671">

                      $ 663,383

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/coinshield/#markets" class="price" data-usd="0.0169414" data-btc="2.5e-05">$ 0.016941</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://nexusoft.io/platform/Explorer" data-supply="39157516.2269">

                          39,157,516
                          NIRO
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/coinshield/#markets" class="volume" data-usd="19138.7" data-btc="28.2425">$ 19,139</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="30.75" data-btc="29.35">30.75 %</td>

                <td><a href="https://coinmarketcap.com/currencies/coinshield/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/789.png"></a></td>
            </tr><tr id="id-wild-beast-block" class="even" role="row">
                <td class="text-center sorting_1">
                    86
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/wild-beast-block.png" class="currency-logo" alt="Wild Beast Block">
                    <a href="https://coinmarketcap.com/currencies/wild-beast-block/">Wild Beast B...</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="656603.63853" data-btc="968.93330859">

                      $ 656,604

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/wild-beast-block/#markets" class="price" data-usd="0.390271" data-btc="0.000575913">$ 0.390271</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/wbb/" data-supply="1682430.0">

                          1,682,430
                          WBB
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/wild-beast-block/#markets" class="volume" data-usd="5962.14" data-btc="8.79818">$ 5,962</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="21.30" data-btc="20.02">21.30 %</td>

                <td><a href="https://coinmarketcap.com/currencies/wild-beast-block/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/831.png"></a></td>
            </tr><tr id="id-qora" class="odd" role="row">
                <td class="text-center sorting_1">
                    87
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/qora.png" class="currency-logo" alt="Qora">
                    <a href="https://coinmarketcap.com/currencies/qora/">Qora</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="609896.0" data-btc="900.009">

                      $ 609,896

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/qora/#markets" class="price" data-usd="6.09896e-05" data-btc="9.00009e-08">$ 0.000061</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://coinia.net/qora/blockexplorer.php" data-supply="10000000000.0">

                          10,000,000,000
                          QORA
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/qora/#markets" class="volume" data-usd="12726.0" data-btc="18.7795">$ 12,726</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-7.72" data-btc="-8.71">-7.72 %</td>

                <td><a href="https://coinmarketcap.com/currencies/qora/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/344.png"></a></td>
            </tr><tr id="id-dnotes" class="even" role="row">
                <td class="text-center sorting_1">
                    88
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/dnotes.png" class="currency-logo" alt="DNotes">
                    <a href="https://coinmarketcap.com/currencies/dnotes/">DNotes</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="608442.761489" data-btc="897.863997345">

                      $ 608,443

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/dnotes/#markets" class="price" data-usd="0.00548662" data-btc="8.09647e-06">$ 0.005487</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://www.multifaucet.tk/index.php?blockexplorer=NOTE" class="stale" data-supply="110895735.715">

                          110,895,736
                          NOTE
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/dnotes/#markets" class="volume" data-usd="907.71" data-btc="1.33948">$ 908</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-7.26" data-btc="-8.25">-7.26 %</td>

                <td><a href="https://coinmarketcap.com/currencies/dnotes/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/184.png"></a></td>
            </tr><tr id="id-zccoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    89
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/zccoin.png" class="currency-logo" alt="ZcCoin">
                    <a href="https://coinmarketcap.com/currencies/zccoin/">ZcCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="596883.96136" data-btc="880.8078662">

                      $ 596,884

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/zccoin/#markets" class="price" data-usd="0.00968071" data-btc="1.42856e-05">$ 0.009681</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://www.multifaucet.tk/index.php?blockexplorer=ZCC" class="stale" data-supply="61657043.8904">

                          61,657,044
                          ZCC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/zccoin/#markets" class="volume" data-usd="11782.2" data-btc="17.3867">$ 11,782</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-5.37" data-btc="-6.38">-5.37 %</td>

                <td><a href="https://coinmarketcap.com/currencies/zccoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/516.png"></a></td>
            </tr><tr id="id-ribbitrewards" class="even" role="row">
                <td class="text-center sorting_1">
                    90
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/ribbitrewards.png" class="currency-logo" alt="RibbitRewards">
                    <a href="https://coinmarketcap.com/currencies/ribbitrewards/">RibbitRewards</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="596336.0" data-btc="880.0">

                      $ 596,336

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ribbitrewards/#markets" class="price" data-usd="0.00149084" data-btc="2.2e-06">$ 0.001491</a>
                </td>
                <td class="no-wrap text-right">

                        <span data-supply="400000000.0">


                          400,000,000
                          RBR
                        </span>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/ribbitrewards/#markets" class="volume" data-usd="6716.37" data-btc="9.91118">$ 6,716</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="15.71" data-btc="14.48">15.71 %</td>

                <td><a href="https://coinmarketcap.com/currencies/ribbitrewards/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/788.png"></a></td>
            </tr><tr id="id-unioncoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    91
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/unioncoin.png" class="currency-logo" alt="UnionCoin">
                    <a href="https://coinmarketcap.com/currencies/unioncoin/">UnionCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="579829.812429" data-btc="855.638016">

                      $ 579,830

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/unioncoin/#markets" class="price" data-usd="0.0691211" data-btc="0.000102">$ 0.069121</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://unioncoin.org/block/block_crawler.php" class="stale" data-supply="8388608.0">

                          8,388,608
                          UNC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/unioncoin/#markets" class="volume" data-usd="1669.79" data-btc="2.46406">$ 1,670</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-1.23" data-btc="-2.28">-1.23 %</td>

                <td><a href="https://coinmarketcap.com/currencies/unioncoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/176.png"></a></td>
            </tr><tr id="id-vootcoin" class="even" role="row">
                <td class="text-center sorting_1">
                    92
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/vootcoin.png" class="currency-logo" alt="VootCoin">
                    <a href="https://coinmarketcap.com/currencies/vootcoin/">VootCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="572770.897266" data-btc="845.224005932">

                      $ 572,771

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/vootcoin/#markets" class="price" data-usd="0.0082674" data-btc="1.22e-05">$ 0.008267</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://chainz.cryptoid.info/voot/" class="stale" data-supply="69280656.224">

                          69,280,656
                          VOOT
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/vootcoin/#markets" class="volume" data-usd="5377.79" data-btc="7.93586">$ 5,378</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="22.48" data-btc="21.19">22.48 %</td>

                <td><a href="https://coinmarketcap.com/currencies/vootcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/375.png"></a></td>
            </tr><tr id="id-nav-coin" class="odd" role="row">
                <td class="text-center sorting_1">
                    93
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/nav-coin.png" class="currency-logo" alt="NAV Coin">
                    <a href="https://coinmarketcap.com/currencies/nav-coin/">NAV Coin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="564678.820107" data-btc="833.283247203">

                      $ 564,679

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/nav-coin/#markets" class="price" data-usd="0.00947457" data-btc="1.39814e-05">$ 0.009475</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://navajocoin.org/block-explorer" class="stale" data-supply="59599414.0217">

                          59,599,414
                          NAV
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/nav-coin/#markets" class="volume" data-usd="26597.7" data-btc="39.2495">$ 26,598</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="89.75" data-btc="87.73">89.75 %</td>

                <td><a href="https://coinmarketcap.com/currencies/nav-coin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/377.png"></a></td>
            </tr><tr id="id-global-currency-reserve" class="even" role="row">
                <td class="text-center sorting_1">
                    94
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/global-currency-reserve.png" class="currency-logo" alt="Global Currency Reserve">
                    <a href="https://coinmarketcap.com/currencies/global-currency-reserve/">Global Curre...</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="554958.382866" data-btc="818.938734165">

                      $ 554,958

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/global-currency-reserve/#markets" class="price" data-usd="0.00548901" data-btc="8.1e-06">$ 0.005489</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/gcr/" data-supply="101103547.428">

                          101,103,547
                          GCR
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/global-currency-reserve/#markets" class="volume" data-usd="2390.19" data-btc="3.52715">$ 2,390</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-11.01" data-btc="-11.96">-11.01 %</td>

                <td><a href="/currencies/global-currency-reserve/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/1044.png"></a></td>
            </tr><tr id="id-faircoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    95
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/faircoin.png" class="currency-logo" alt="FairCoin">
                    <a href="https://coinmarketcap.com/currencies/faircoin/">FairCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="549431.500994" data-btc="810.782985315">

                      $ 549,432

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/faircoin/#markets" class="price" data-usd="0.010463" data-btc="1.544e-05">$ 0.010463</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chain.fair-coin.org/chain/FairCoin" data-supply="52511851.3805">

                          52,511,851
                          FAIR
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/faircoin/#markets" class="volume" data-usd="2546.03" data-btc="3.75712">$ 2,546</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-31.60" data-btc="-32.31">-31.60 %</td>

                <td><a href="https://coinmarketcap.com/currencies/faircoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/224.png"></a></td>
            </tr><tr id="id-virtacoin" class="even" role="row">
                <td class="text-center sorting_1">
                    96
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/virtacoin.png" class="currency-logo" alt="Virtacoin">
                    <a href="https://coinmarketcap.com/currencies/virtacoin/">Virtacoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="514387.128375" data-btc="759.068382355">

                      $ 514,387

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/virtacoin/#markets" class="price" data-usd="4.37025e-05" data-btc="6.44907e-08">$ 0.000044</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://chainz.cryptoid.info/vta" data-supply="11770199150.5">

                          11,770,199,150
                          VTA
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/virtacoin/#markets" class="volume" data-usd="153.853" data-btc="0.227038">$ 154</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="21.92" data-btc="20.61">21.92 %</td>

                <td><a href="https://coinmarketcap.com/currencies/virtacoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/520.png"></a></td>
            </tr><tr id="id-instantdex" class="odd" role="row">
                <td class="text-center sorting_1">
                    97
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/instantdex.png" class="currency-logo" alt="InstantDEX">
                    <a href="https://coinmarketcap.com/assets/instantdex/">InstantDEX</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="512591.0" data-btc="756.417">

                      $ 512,591

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/instantdex/#markets" class="price" data-usd="0.512591" data-btc="0.000756417">$ 0.512591</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://nxtreporting.com/?as=15344649963748848799" data-supply="1000000.0">

                          1,000,000
                          DEX
                        </a>


                        *

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/assets/instantdex/#markets" class="volume" data-usd="108.157" data-btc="0.159604">$ 108</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-48.95" data-btc="-49.49">-48.95 %</td>

                <td><a href="https://coinmarketcap.com/assets/instantdex/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/603.png"></a></td>
            </tr><tr id="id-digitalcoin" class="even" role="row">
                <td class="text-center sorting_1">
                    98
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/digitalcoin.png" class="currency-logo" alt="Digitalcoin">
                    <a href="https://coinmarketcap.com/currencies/digitalcoin/">Digitalcoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="509943.628146" data-btc="752.510064137">

                      $ 509,944

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/digitalcoin/#markets" class="price" data-usd="0.0149731" data-btc="2.20954e-05">$ 0.014973</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://dgc.blockr.io" data-supply="34057318.0">

                          34,057,318
                          DGC
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/digitalcoin/#markets" class="volume" data-usd="1610.67" data-btc="2.37682">$ 1,611</a>
                </td>

                <td class="no-wrap percent-24h  negative_change text-right" data-usd="-4.00" data-btc="-5.02">-4.00 %</td>

                <td><a href="https://coinmarketcap.com/currencies/digitalcoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/18.png"></a></td>
            </tr><tr id="id-zetacoin" class="odd" role="row">
                <td class="text-center sorting_1">
                    99
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/zetacoin.png" class="currency-logo" alt="Zetacoin">
                    <a href="https://coinmarketcap.com/currencies/zetacoin/">Zetacoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="502936.101325" data-btc="742.171468897">

                      $ 502,936

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/zetacoin/#markets" class="price" data-usd="0.00305848" data-btc="4.51333e-06">$ 0.003058</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="https://chainz.cryptoid.info/zet/" data-supply="164439885.605">

                          164,439,886
                          ZET
                        </a>




                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/zetacoin/#markets" class="volume" data-usd="1200.96" data-btc="1.77223">$ 1,201</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="3.53" data-btc="2.45">3.53 %</td>

                <td><a href="https://coinmarketcap.com/currencies/zetacoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/56.png"></a></td>
            </tr><tr id="id-curecoin" class="even" role="row">
                <td class="text-center sorting_1">
                    100
                </td>
                <td class="no-wrap currency-name">
                    <img src="../assets/img/crypto/curecoin.png" class="currency-logo" alt="CureCoin">
                    <a href="https://coinmarketcap.com/currencies/curecoin/">CureCoin</a>
                </td>

                <td class="no-wrap market-cap text-right" data-usd="498343.848133" data-btc="735.395694999">

                      $ 498,344

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/curecoin/#markets" class="price" data-usd="0.0188543" data-btc="2.78229e-05">$ 0.018854</a>
                </td>
                <td class="no-wrap text-right">
                    <a href="http://stats.curecoinfolding.com" class="stale" data-supply="26431310.0">

                          26,431,310
                          CURE
                        </a>


                        **

                </td>
                <td class="no-wrap text-right">
                    <a href="https://coinmarketcap.com/currencies/curecoin/#markets" class="volume" data-usd="387.441" data-btc="0.571737">$ 387</a>
                </td>

                <td class="no-wrap percent-24h  positive_change  text-right" data-usd="1.90" data-btc="0.81">1.90 %</td>

                <td><a href="https://coinmarketcap.com/currencies/curecoin/#charts"><img class="sparkline" alt="sparkline" src="https://files.coinmarketcap.com/generated/sparklines/333.png"></a></td>
            </tr></tbody>
            </table></div>

            <div class="caixa">
              <div class="row">
                <div class="col s6 m6 l6">
                  <h4>Confira tambem</h4>
                  <a href="exchanges.php"><h5>Exchanges</h5></a>
                  <a href="utilidades.php"><h5>Sites Uteis</h5></a>
                </div>

              </div>

            </div>


  </div>
  <?php include("include/footer.php"); ?>
  <?php include("include/jstoast.php"); ?>
  <?php include("include/jsmodal.php"); ?>
  <?php include("include/jssidenav.php"); ?>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80863441-1', 'auto');
  ga('send', 'pageview');

</script>
  <script src="../assets/materialize/js/materialize.min.js"></script>
</body>
<?php include("include/form.php"); ?>
  <?php include("include/menu1.php"); ?>
</html>
