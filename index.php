<?php

require_once 'sentence.php';
require_once 'result.php';
require_once 'functions.php';

$text = <<< EO_TEXT
The Cold War was a period of geopolitical tension between the Soviet Union with its satellite states (the Eastern Bloc), and the United States with its allies (the Western Bloc) after World War II. The historiography of the conflict began between 1946 (the year US diplomat George Kennan's "Long Telegram" from Moscow cemented a US foreign policy of containment of Soviet expansionism) and 1947 (the introduction of the Truman Doctrine). The Cold War began to de-escalate after the Revolutions of 1989. The collapse of the USSR in 1991 (when the proto-state Republics of the Soviet Union declared independence) was the end of the Cold War. The term "cold" is used because there was no large-scale fighting directly between the two sides, but they each supported major regional conflicts known as proxy wars. The conflict split the temporary wartime alliance against Nazi Germany and its allies, leaving the USSR and the US as two superpowers with profound economic and political differences.

The capitalist West was led by the United States, a federal republic with a two-party presidential system, as well as the other First World nations of the Western Bloc that were generally liberal democratic with a free press and independent organizations, but were economically and politically entwined with a network of banana republics and other authoritarian regimes, most of which were the Western Bloc's former colonies.[1][A] Some major Cold War frontlines such as Indochina, Indonesia, and the Congo were still Western colonies in 1947. The Soviet Union, on the other hand, was a self-proclaimed Marxist–Leninist state that imposed a totalitarian regime that was led by a small committee, the Politburo. The Party had full control of the state, the press, the military, the economy, and local organizations throughout the Second World, including the Warsaw Pact and other satellites. The Kremlin funded communist parties around the world but was challenged for control by Mao's People's Republic of China following the Sino-Soviet split of the 1960s. As nearly all the colonial states achieved independence in the period 1945–1960, they became Third World battlefields in the Cold War.

India, Indonesia, and Yugoslavia took the lead in promoting neutrality with the Non-Aligned Movement, but it never had much power in its own right. The Soviet Union and the United States never engaged directly in full-scale armed combat. However, both were heavily armed in preparation for a possible all-out nuclear world war. China and the United States fought an undeclared high-casualty war in Korea (1950–53) that resulted in a stalemate. Each side had a nuclear strategy that discouraged an attack by the other side, on the basis that such an attack would lead to the total destruction of the attacker—the doctrine of mutually assured destruction (MAD). Aside from the development of the two sides' nuclear arsenals, and their deployment of conventional military forces, the struggle for dominance was expressed via proxy wars around the globe, psychological warfare, massive propaganda campaigns and espionage, far-reaching embargoes, rivalry at sports events, and technological competitions such as the Space Race.

The first phase of the Cold War began in the first two years after the end of the Second World War in 1945. The Soviet Union consolidated its control over the states of the Eastern Bloc, while the United States began a strategy of global containment to challenge Soviet power, extending military and financial aid to the countries of Western Europe (for example, supporting the anti-communist side in the Greek Civil War) and creating the NATO alliance. The Berlin Blockade (1948–49) was the first major crisis of the Cold War. With the victory of the Communist side in the Chinese Civil War and the outbreak of the Korean War (1950–1953), the conflict expanded. The USSR and the US competed for influence in Latin America and the decolonizing states of Africa and Asia. The Soviets suppressed the Hungarian Revolution of 1956. The expansion and escalation sparked more crises, such as the Suez Crisis (1956), the Berlin Crisis of 1961, and the Cuban Missile Crisis of 1962, which was perhaps the closest the two sides came to nuclear war. Meanwhile, an international peace movement took root and grew among citizens around the world, first in Japan from 1954, when people became concerned about nuclear weapons testing, but soon also in Europe and the US. The peace movement, and in particular the anti-nuclear movement, gained pace and popularity from the late 1950s and early 1960s, and continued to grow through the '70s and '80s with large protest marches, demonstrations, and various non-parliamentary activism opposing war and calling for global nuclear disarmament. Following the Cuban Missile Crisis, a new phase began that saw the Sino-Soviet split complicate relations within the Communist sphere, while US allies, particularly France, demonstrated greater independence of action. The USSR crushed the 1968 Prague Spring liberalization program in Czechoslovakia, while the US experienced internal turmoil from the civil rights movement and opposition to the Vietnam War (1955–75), which ended with the defeat of the US-backed South Vietnam, prompting further adjustments.

By the 1970s, both sides had become interested in making allowances in order to create a more stable and predictable international system, ushering in a period of détente that saw the Strategic Arms Limitation Talks and the US opening relations with the PRC as a strategic counterweight to the USSR. Détente collapsed at the end of the decade with the beginning of the Soviet–Afghan War in 1979. The early 1980s were another period of elevated tension, with the Soviet downing of KAL Flight 007 and the "Able Archer" NATO military exercises, both in 1983. The United States increased diplomatic, military, and economic pressures on the Soviet Union, at a time when the communist state was already suffering from economic stagnation. On 12 June 1982, a million protesters gathered in Central Park, New York to call for an end to the Cold War arms race and nuclear weapons in particular. In the mid-1980s, the new Soviet leader Mikhail Gorbachev introduced the liberalizing reforms of perestroika ("reorganization", 1987) and glasnost ("openness", c. 1985) and ended Soviet involvement in Afghanistan. Pressures for national sovereignty grew stronger in Eastern Europe, especially Poland. Gorbachev meanwhile refused to use Soviet troops to bolster the faltering Warsaw Pact regimes as had occurred in the past. The result in 1989 was a wave of revolutions that peacefully (with the exception of the Romanian Revolution) overthrew all of the communist regimes of Central and Eastern Europe. The Communist Party of the Soviet Union itself lost control and was banned following an abortive coup attempt in August 1991. This in turn led to the formal dissolution of the USSR in December 1991 and the collapse of communist regimes in other countries such as Mongolia, Cambodia, and South Yemen. The United States remained as the world's only superpower.

The Cold War and its events have left a significant legacy. It is often referred to in popular culture, especially in media featuring themes of espionage (notably the internationally successful James Bond book and film franchise) and the threat of nuclear warfare. Meanwhile, a renewed state of tension between the Soviet Union's successor state, Russia, and the United States in the 2010s (including its Western allies) and growing tension between an increasingly powerful China and the US and its Western Allies have each been referred to as the Second Cold War.
EO_TEXT;

$output = zinnbuzz( $text, 'power' );

var_dump( $output );