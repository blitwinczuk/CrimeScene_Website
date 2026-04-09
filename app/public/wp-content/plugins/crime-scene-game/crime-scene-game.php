<?php
/*
Plugin Name: Crime Scene Mini Game
Description: Interactive crime scene mini game for WordPress.
Version: 4.2
Author: CSI Team
*/

if (!defined('ABSPATH')) exit;

function crime_scene_game() {
    ob_start();
    ?>
    <div id="crime-game">
        <div class="game-header">
            <h2>Crime Scene Investigation</h2>
            <p>Select a room, search furniture, inspect objects, and collect evidence.</p>

            <div class="top-controls">
                <div class="room-picker">
                    <label for="room-select"><strong>Room:</strong></label>
                    <select id="room-select">
                        <option value="living-room">Living Room</option>
                    </select>
                </div>

                <div class="stats">
                    <span>Score: <strong id="score">0</strong></span>
                    <span>Collected: <strong id="collected-count">0</strong>/4</span>
                </div>
            </div>
        </div>

        <div class="game-layout">
            <div id="scene" class="living-room-scene">
                <div class="wall"></div>
                <div class="floor"></div>

                <!-- Window -->
                <div class="window interactive searchable"
                     data-target="window"
                     data-label="Window"
                     data-message="You inspected the window area. No evidence found.">
                    <div class="blinds"></div>
                    <div class="window-glass"></div>
                    <div class="window-cord"></div>
                    <div class="furniture-label">Window</div>
                </div>

                <!-- Wall Art -->
                <div class="wall-art wall-art-1 interactive searchable"
                     data-target="wallart1"
                     data-label="Wall Art"
                     data-message="You inspected the wall art. No evidence found behind it.">
                    <div class="art-inner art-inner-1"></div>
                </div>

                <div class="wall-art wall-art-2 interactive searchable"
                     data-target="wallart2"
                     data-label="Wall Art"
                     data-message="You inspected the wall art. No evidence found behind it.">
                    <div class="art-inner art-inner-2"></div>
                </div>

                <div class="wall-art wall-art-3 interactive searchable"
                     data-target="wallart3"
                     data-label="Wall Art"
                     data-message="You inspected the wall art. No evidence found behind it.">
                    <div class="art-inner art-inner-3"></div>
                </div>

                <!-- Sofa -->
                <div class="sofa interactive searchable"
                     data-target="sofa"
                     data-label="Sofa"
                     data-message="You searched the sofa. Check between the cushions and underneath.">
                    <div class="sofa-back"></div>
                    <div class="sofa-seat"></div>
                    <div class="sofa-arm left"></div>
                    <div class="sofa-arm right"></div>
                    <div class="sofa-leg leg-1"></div>
                    <div class="sofa-leg leg-2"></div>
                    <div class="sofa-leg leg-3"></div>
                    <div class="sofa-leg leg-4"></div>
                    <div class="sofa-button button-1"></div>
                    <div class="sofa-button button-2"></div>
                    <div class="furniture-label">Sofa</div>
                </div>

                <!-- Plant beside sofa -->
                <div class="plant interactive searchable"
                     data-target="plant"
                     data-label="Plant"
                     data-message="You searched the plant area. No evidence found.">
                    <div class="pot"></div>
                    <div class="leaf leaf-1"></div>
                    <div class="leaf leaf-2"></div>
                    <div class="leaf leaf-3"></div>
                    <div class="leaf leaf-4"></div>
                    <div class="leaf leaf-5"></div>
                    <div class="furniture-label">Plant</div>
                </div>

                <!-- Lamp -->
                <div class="lamp interactive searchable"
                     data-target="lamp"
                     data-label="Standing Lamp"
                     data-message="You inspected the lamp area. No evidence found.">
                    <div class="lamp-shade"></div>
                    <div class="lamp-pole"></div>
                    <div class="lamp-base"></div>
                    <div class="furniture-label">Standing Lamp</div>
                </div>

                <!-- TV Stand -->
                <div class="tv-stand interactive searchable"
                     data-target="tvstand"
                     data-label="TV Stand"
                     data-message="You searched the TV stand. Check shelves and the surface carefully.">
                    <div class="tv-screen"></div>
                    <div class="tv-shelf shelf-1"></div>
                    <div class="tv-shelf shelf-2"></div>
                    <div class="tv-leg left"></div>
                    <div class="tv-leg right"></div>
                    <div class="furniture-label">TV Stand</div>
                </div>

                <!-- Bookcase -->
                <div class="bookcase interactive searchable"
                     data-target="bookcase"
                     data-label="Bookcase"
                     data-message="You searched the bookcase. Look between books and on the shelves.">
                    <div class="book-shelf shelf-a"></div>
                    <div class="book-shelf shelf-b"></div>
                    <div class="book-shelf shelf-c"></div>

                    <div class="book book-1"></div>
                    <div class="book book-2"></div>
                    <div class="book book-3"></div>
                    <div class="book book-4"></div>
                    <div class="book book-5"></div>

                    <div class="decor decor-1"></div>
                    <div class="decor decor-2"></div>

                    <div class="cabinet cabinet-left"></div>
                    <div class="cabinet cabinet-right"></div>
                    <div class="furniture-label">Bookcase</div>
                </div>

                <!-- Evidence -->
                <div class="evidence hidden"
                     data-name="Phone"
                     data-description="A mobile phone hidden between the sofa cushions."
                     data-foundin="sofa"
                     style="top: 66%; left: 31%;">
                    📱
                </div>

                <div class="evidence hidden"
                     data-name="USB Drive"
                     data-description="A USB drive found on the lower shelf of the TV stand."
                     data-foundin="tvstand"
                     style="top: 73%; left: 66%;">
                    💾
                </div>

                <div class="evidence hidden"
                     data-name="Handwritten Note"
                     data-description="A handwritten note placed behind books in the bookcase."
                     data-foundin="bookcase"
                     style="top: 41%; left: 86%;">
                    📝
                </div>

                <div class="evidence hidden"
                     data-name="Key"
                     data-description="A key found near the TV stand."
                     data-foundin="tvstand"
                     style="top: 67%; left: 61%;">
                    🔑
                </div>

                <!-- Distractors -->
                <div class="fake-item fake-cup"
                     data-name="Coffee Cup"
                     data-description="A normal coffee cup. It does not appear to be relevant evidence."
                     style="top: 73%; left: 60%;">
                    <div class="cup-body"></div>
                    <div class="cup-handle"></div>
                </div>

                <div class="fake-item fake-book"
                     data-name="Decorative Book"
                     data-description="A regular decorative book with no obvious evidential value."
                     style="top: 35%; left: 81%;">
                    <div class="book-body"></div>
                    <div class="book-spine"></div>
                </div>

                <div class="fake-item fake-vase"
                     data-name="Decorative Vase"
                     data-description="A decorative vase. It is not relevant evidence."
                     style="top: 53%; left: 88%;">
                    <div class="vase-body"></div>
                </div>
            </div>

            <div class="side-panel">
                <h3>Inspection Panel</h3>

                <p><strong>Selected:</strong> <span id="selected-name">None</span></p>
                <p><strong>Description:</strong> <span id="selected-description">Click furniture or an item in the room.</span></p>

                <div class="button-group">
                    <button id="search-button" disabled>Search Object</button>
                    <button id="collect-button" disabled>Collect Evidence</button>
                    <button id="reset-button">Reset Game</button>
                </div>

                <div id="status-message">Start by searching the living room.</div>

                <h3>Evidence Log</h3>
                <ul id="log"></ul>
            </div>
        </div>
    </div>

    <style>
        #crime-game {
            max-width: 1320px;
            margin: 30px auto;
            font-family: Arial, sans-serif;
            color: #111827;
        }

        .game-header {
            background: linear-gradient(135deg, #111827, #1f2937);
            color: #fff;
            padding: 22px 24px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.18);
            margin-bottom: 20px;
        }

        .game-header h2 {
            margin: 0 0 8px;
        }

        .top-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 14px;
        }

        .room-picker {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .room-picker select {
            padding: 8px 10px;
            border-radius: 8px;
            border: none;
            font-weight: 700;
        }

        .stats {
            display: flex;
            gap: 20px;
            font-size: 17px;
        }

        .game-layout {
            display: grid;
            grid-template-columns: 2.2fr 1fr;
            gap: 22px;
        }

        #scene {
            position: relative;
            height: 760px;
            border-radius: 20px;
            overflow: hidden;
            border: 4px solid #2f2f2f;
            box-shadow: inset 0 0 25px rgba(0,0,0,0.15), 0 12px 30px rgba(0,0,0,0.16);
            background: #eadfbf;
        }

        .wall {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, #e8ddb8 0%, #e4d7ae 72%, transparent 72%);
        }

        .floor {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 28%;
            background: linear-gradient(to bottom, #cf8652, #c67844);
        }

        .interactive,
        .evidence,
        .fake-item {
            position: absolute;
            user-select: none;
            transition: transform 0.22s ease, box-shadow 0.22s ease, opacity 0.22s ease;
        }

        .interactive:hover,
        .evidence:hover,
        .fake-item:hover {
            transform: scale(1.03);
        }

        .interactive {
            cursor: pointer;
        }

        .furniture-label {
            position: absolute;
            bottom: 8px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(17,24,39,0.72);
            color: #fff;
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 8px;
            white-space: nowrap;
        }

        .selected-furniture {
            filter: brightness(1.05);
            box-shadow: 0 0 0 4px rgba(59,130,246,0.55);
        }

        .selected-ring {
            box-shadow: 0 0 0 4px #3b82f6, 0 8px 16px rgba(0,0,0,0.18);
        }

        .window {
            top: 12%;
            left: 6%;
            width: 130px;
            height: 190px;
        }

        .window-glass {
            position: absolute;
            inset: 26px 12px 0 12px;
            background:
                linear-gradient(to bottom, #bff0ff, #8cd0ec),
                linear-gradient(90deg, rgba(255,255,255,0.5), transparent);
            border: 5px solid #4e7d84;
            border-top: none;
        }

        .window-glass::before,
        .window-glass::after {
            content: "";
            position: absolute;
            background: rgba(255,255,255,0.7);
        }

        .window-glass::before {
            width: 4px;
            height: 100%;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
        }

        .window-glass::after {
            height: 4px;
            width: 100%;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .blinds {
            position: absolute;
            top: 0;
            left: 5px;
            width: 120px;
            height: 110px;
            background:
                repeating-linear-gradient(
                    to bottom,
                    #2baba8 0px,
                    #2baba8 7px,
                    #8ce9e7 7px,
                    #8ce9e7 11px
                );
            border: 3px solid #20817f;
            border-bottom-left-radius: 2px;
            border-bottom-right-radius: 2px;
        }

        .window-cord {
            position: absolute;
            left: 8px;
            top: 108px;
            width: 3px;
            height: 72px;
            background: #20817f;
        }

        .wall-art {
            width: 52px;
            height: 40px;
            border: 4px solid #9f672f;
            background: #f7f3e8;
            cursor: pointer;
        }

        .wall-art-1 { top: 21%; left: 24%; }
        .wall-art-2 { top: 28%; left: 22%; }
        .wall-art-3 { top: 27%; left: 29%; }

        .art-inner {
            position: absolute;
            inset: 5px;
        }

        .art-inner-1 {
            background: linear-gradient(135deg, #9fd3c7, #4f9d8f);
        }

        .art-inner-2 {
            background: linear-gradient(135deg, #ffe29a, #f6b73c);
        }

        .art-inner-3 {
            background: linear-gradient(135deg, #d7d7f9, #8b8be0);
        }

        .sofa {
            top: 50%;
            left: 18%;
            width: 220px;
            height: 170px;
        }

        .sofa-back {
            position: absolute;
            top: 22px;
            left: 18px;
            width: 184px;
            height: 64px;
            background: linear-gradient(to bottom, #bc620d, #934907);
            border-radius: 18px 18px 10px 10px;
        }

        .sofa-seat {
            position: absolute;
            top: 78px;
            left: 16px;
            width: 188px;
            height: 54px;
            background: linear-gradient(to bottom, #c86f14, #9e5510);
            border-radius: 14px;
        }

        .sofa-arm {
            position: absolute;
            top: 54px;
            width: 34px;
            height: 72px;
            background: linear-gradient(to bottom, #b75f0d, #8e4708);
            border-radius: 14px;
        }

        .sofa-arm.left { left: 0; }
        .sofa-arm.right { right: 0; }

        .sofa-leg {
            position: absolute;
            bottom: 10px;
            width: 10px;
            height: 30px;
            background: #493122;
            border-radius: 4px;
            transform: rotate(15deg);
        }

        .leg-1 { left: 28px; }
        .leg-2 { left: 70px; }
        .leg-3 { right: 70px; }
        .leg-4 { right: 28px; }

        .sofa-button {
            position: absolute;
            top: 58px;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #7e3a06;
        }

        .button-1 { left: 82px; }
        .button-2 { left: 134px; }

        .plant {
            bottom: 18px;
            left: 300px;
            width: 90px;
            height: 170px;
            cursor: pointer;
        }

        .pot {
            position: absolute;
            bottom: 0;
            left: 24px;
            width: 44px;
            height: 38px;
            background: #e7c9a2;
            border-radius: 0 0 10px 10px;
            border: 2px solid #cfa97b;
        }

        .leaf {
            position: absolute;
            bottom: 30px;
            width: 18px;
            height: 76px;
            background: linear-gradient(to bottom, #3b9258, #22683d);
            border-radius: 20px;
            transform-origin: bottom center;
        }

        .leaf-1 { left: 8px; transform: rotate(-35deg); }
        .leaf-2 { left: 22px; transform: rotate(-15deg); }
        .leaf-3 { left: 36px; transform: rotate(0deg); }
        .leaf-4 { left: 50px; transform: rotate(16deg); }
        .leaf-5 { left: 64px; transform: rotate(34deg); }

        .lamp {
            top: 42%;
            left: 44%;
            width: 70px;
            height: 230px;
        }

        .lamp-shade {
            position: absolute;
            top: 0;
            left: 12px;
            width: 46px;
            height: 34px;
            background: linear-gradient(to bottom, #f1d9b7, #e6c59a);
            clip-path: polygon(15% 0, 85% 0, 100% 100%, 0 100%);
        }

        .lamp-pole {
            position: absolute;
            top: 34px;
            left: 33px;
            width: 4px;
            height: 150px;
            background: #8f6c50;
        }

        .lamp-base {
            position: absolute;
            bottom: 14px;
            left: 16px;
            width: 38px;
            height: 20px;
            border-radius: 50%;
            background: #8f6c50;
        }

        .tv-stand {
            top: 39%;
            left: 54%;
            width: 210px;
            height: 220px;
        }

        .tv-screen {
            position: absolute;
            top: 8px;
            left: 28px;
            width: 154px;
            height: 92px;
            background: linear-gradient(135deg, #163c53, #081b29);
            border: 6px solid #14222d;
            border-radius: 4px;
        }

        .tv-shelf {
            position: absolute;
            left: 24px;
            width: 162px;
            background: linear-gradient(to bottom, #8e4f17, #6f3e12);
            border-radius: 18px;
        }

        .shelf-1 {
            top: 110px;
            height: 54px;
        }

        .shelf-2 {
            top: 152px;
            height: 40px;
            border-radius: 0 0 18px 18px;
        }

        .tv-leg {
            position: absolute;
            bottom: 10px;
            width: 14px;
            height: 24px;
            background: #4c311f;
            border-radius: 8px;
        }

        .tv-leg.left { left: 42px; }
        .tv-leg.right { right: 42px; }

        .bookcase {
            top: 19%;
            right: 6%;
            width: 110px;
            height: 330px;
            background: linear-gradient(to bottom, #975319, #7a4314);
            border: 4px solid #6c360f;
        }

        .book-shelf {
            position: absolute;
            left: 6px;
            width: 94px;
            height: 6px;
            background: #6c360f;
        }

        .shelf-a { top: 72px; }
        .shelf-b { top: 144px; }
        .shelf-c { top: 222px; }

        .book {
            position: absolute;
            width: 12px;
            border-radius: 2px 2px 0 0;
        }

        .book-1 { top: 18px; left: 18px; height: 34px; background: #f4d35e; }
        .book-2 { top: 16px; left: 34px; height: 36px; background: #8ecae6; }
        .book-3 { top: 92px; left: 20px; height: 34px; background: #d62828; }
        .book-4 { top: 92px; left: 36px; height: 28px; background: #6a4c93; }
        .book-5 { top: 92px; left: 52px; height: 30px; background: #f77f00; }

        .decor {
            position: absolute;
            width: 18px;
            background: #38a169;
            border-radius: 10px 10px 4px 4px;
        }

        .decor-1 { top: 18px; right: 14px; height: 22px; }
        .decor-2 { top: 166px; right: 18px; height: 28px; background: #2c7a7b; }

        .cabinet {
            position: absolute;
            bottom: 10px;
            width: 42px;
            height: 58px;
            background: #a85d24;
            border: 2px solid #7d4215;
        }

        .cabinet-left { left: 8px; }
        .cabinet-right { right: 8px; }

        .evidence,
        .fake-item {
            width: 62px;
            height: 62px;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translate(-50%, -50%);
            border-radius: 14px;
            border: 2px solid #1f2937;
            background: linear-gradient(to bottom, #ffffff, #e9edf1);
            box-shadow: 0 8px 16px rgba(0,0,0,0.18);
            cursor: pointer;
            font-size: 30px;
            line-height: 1;
        }

        .hidden {
            display: none;
        }

        .collected {
            opacity: 0.35;
            pointer-events: none;
        }

        .fake-cup .cup-body {
            width: 20px;
            height: 22px;
            background: #d97706;
            border-radius: 0 0 6px 6px;
            position: absolute;
        }

        .fake-cup .cup-handle {
            width: 10px;
            height: 12px;
            border: 3px solid #d97706;
            border-left: none;
            border-radius: 0 8px 8px 0;
            position: absolute;
            left: 34px;
        }

        .fake-book .book-body {
            width: 24px;
            height: 30px;
            background: #7c3aed;
            position: absolute;
            border-radius: 2px;
        }

        .fake-book .book-spine {
            width: 6px;
            height: 30px;
            background: #5b21b6;
            position: absolute;
            left: 18px;
        }

        .fake-vase .vase-body {
            width: 22px;
            height: 34px;
            background: linear-gradient(to bottom, #2c7a7b, #225e5f);
            border-radius: 10px 10px 14px 14px;
            position: absolute;
        }

        .side-panel {
            background: #f8fafc;
            border: 2px solid #dbe2ea;
            border-radius: 18px;
            padding: 20px;
            box-shadow: 0 8px 22px rgba(0,0,0,0.08);
        }

        .side-panel h3 {
            margin-top: 0;
        }

        .button-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 16px 0;
        }

        .button-group button {
            border: none;
            border-radius: 10px;
            padding: 11px 14px;
            font-weight: 700;
            cursor: pointer;
            background: #1f2937;
            color: #fff;
            transition: opacity 0.2s ease, transform 0.2s ease;
        }

        .button-group button:hover {
            transform: translateY(-1px);
        }

        .button-group button:disabled {
            opacity: 0.45;
            cursor: not-allowed;
            transform: none;
        }

        #reset-button {
            background: #b91c1c;
        }

        #status-message {
            min-height: 72px;
            background: #eef2ff;
            border-left: 5px solid #4f46e5;
            border-radius: 10px;
            padding: 12px 14px;
            margin: 14px 0 20px;
        }

        #log {
            padding-left: 20px;
            margin: 0;
            max-height: 320px;
            overflow-y: auto;
        }

        #log li {
            margin-bottom: 8px;
        }

        @media (max-width: 980px) {
            .game-layout {
                grid-template-columns: 1fr;
            }

            #scene {
                height: 680px;
            }
        }
    </style>

    <script>
        (function() {
            const roomSelect = document.getElementById('room-select');
            const searchButton = document.getElementById('search-button');
            const collectButton = document.getElementById('collect-button');
            const resetButton = document.getElementById('reset-button');

            const selectedName = document.getElementById('selected-name');
            const selectedDescription = document.getElementById('selected-description');
            const statusMessage = document.getElementById('status-message');
            const scoreEl = document.getElementById('score');
            const collectedCountEl = document.getElementById('collected-count');
            const logEl = document.getElementById('log');

            let score = 0;
            let collectedCount = 0;
            let selectedFurniture = null;
            let selectedItem = null;

            function getSearchableObjects() {
                return document.querySelectorAll('.searchable');
            }

            function getEvidenceItems() {
                return document.querySelectorAll('.evidence');
            }

            function getFakeItems() {
                return document.querySelectorAll('.fake-item');
            }

            function addLog(text) {
                const li = document.createElement('li');
                li.textContent = text;
                logEl.appendChild(li);
            }

            function updateStats() {
                scoreEl.textContent = score;
                collectedCountEl.textContent = collectedCount;
            }

            function clearFurnitureSelection() {
                getSearchableObjects().forEach(obj => obj.classList.remove('selected-furniture'));
                selectedFurniture = null;
            }

            function clearItemSelection() {
                [...getEvidenceItems(), ...getFakeItems()].forEach(item => item.classList.remove('selected-ring'));
                selectedItem = null;
                collectButton.disabled = true;
            }

            function setPanel(name, description) {
                selectedName.textContent = name;
                selectedDescription.textContent = description;
            }

            function resetPanel() {
                setPanel('None', 'Click furniture or an item in the room.');
                searchButton.disabled = true;
                collectButton.disabled = true;
            }

            function bindFurnitureEvents() {
                getSearchableObjects().forEach(obj => {
                    obj.addEventListener('click', function() {
                        clearFurnitureSelection();
                        clearItemSelection();

                        this.classList.add('selected-furniture');
                        selectedFurniture = this;

                        const label = this.dataset.label || 'Object';
                        const message = this.dataset.message || 'Search this object.';
                        setPanel(label, message);
                        statusMessage.textContent = 'Selected object: ' + label + '. Press "Search Object" to inspect it.';
                        searchButton.disabled = false;
                    });
                });
            }

            function bindEvidenceEvents() {
                getEvidenceItems().forEach(item => {
                    item.addEventListener('click', function() {
                        if (this.classList.contains('collected')) return;

                        clearItemSelection();
                        clearFurnitureSelection();

                        this.classList.add('selected-ring');
                        selectedItem = this;

                        setPanel(this.dataset.name, this.dataset.description);
                        statusMessage.textContent = 'Evidence selected. Press "Collect Evidence" to store it.';
                        collectButton.disabled = false;
                        searchButton.disabled = true;
                    });
                });
            }

            function bindFakeItemEvents() {
                getFakeItems().forEach(item => {
                    item.addEventListener('click', function() {
                        if (this.classList.contains('collected')) return;

                        clearItemSelection();
                        clearFurnitureSelection();

                        this.classList.add('selected-ring');
                        selectedItem = this;

                        setPanel(this.dataset.name, this.dataset.description);
                        statusMessage.textContent = 'Item selected. Press "Collect Evidence" to analyze it.';
                        collectButton.disabled = false;
                        searchButton.disabled = true;
                    });
                });
            }

            searchButton.addEventListener('click', function() {
                if (!selectedFurniture) return;

                const target = selectedFurniture.dataset.target;
                const label = selectedFurniture.dataset.label || target;
                const message = selectedFurniture.dataset.message || 'Object searched.';

                selectedFurniture.classList.add('open');

                const evidenceFound = document.querySelectorAll('.evidence[data-foundin="' + target + '"]');
                evidenceFound.forEach(item => {
                    if (!item.classList.contains('collected')) {
                        item.style.display = 'flex';
                    }
                });

                statusMessage.textContent = message;
                addLog('Searched: ' + label);
            });

            collectButton.addEventListener('click', function() {
                if (!selectedItem) return;
                if (selectedItem.classList.contains('collected')) return;

                selectedItem.classList.add('collected');
                selectedItem.classList.remove('selected-ring');

                if (selectedItem.classList.contains('evidence')) {
                    score += 10;
                    collectedCount += 1;

                    addLog('Collected evidence: ' + selectedItem.dataset.name);
                    statusMessage.textContent = 'Evidence collected: ' + selectedItem.dataset.name;
                    setPanel(selectedItem.dataset.name, 'This evidence has been collected and added to the log.');

                    if (collectedCount === 4) {
                        statusMessage.textContent = 'Case complete. All evidence has been collected in the living room.';
                        addLog('Case complete: all evidence collected.');
                    }
                } else if (selectedItem.classList.contains('fake-item')) {
                    score -= 5;

                    addLog('Non-evidence item: ' + selectedItem.dataset.name);
                    statusMessage.textContent = selectedItem.dataset.name + ' is not valid evidence.';
                    setPanel(selectedItem.dataset.name, 'This item is not relevant to the investigation.');
                }

                updateStats();
                selectedItem = null;
                collectButton.disabled = true;
            });

            resetButton.addEventListener('click', function() {
                score = 0;
                collectedCount = 0;
                updateStats();

                clearFurnitureSelection();
                clearItemSelection();

                getSearchableObjects().forEach(obj => obj.classList.remove('open'));

                getEvidenceItems().forEach(item => {
                    item.classList.remove('collected', 'selected-ring');
                    item.style.display = 'none';
                });

                getFakeItems().forEach(item => {
                    item.classList.remove('collected', 'selected-ring');
                });

                logEl.innerHTML = '';
                statusMessage.textContent = 'Game reset. Start by searching the living room.';
                resetPanel();
            });

            roomSelect.addEventListener('change', function() {
                resetButton.click();
                statusMessage.textContent = 'Room loaded: Living Room. Start by searching the room.';
                addLog('Room selected: Living Room');
            });

            bindFurnitureEvents();
            bindEvidenceEvents();
            bindFakeItemEvents();
            updateStats();
            resetPanel();
        })();
    </script>
    <?php
    return ob_get_clean();
}

add_shortcode('crime_game', 'crime_scene_game');
?>