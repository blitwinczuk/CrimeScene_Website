<?php
/*
Plugin Name: Crime Scene Mini Game
Description: Interactive crime scene mini game for WordPress.
Version: 5.3
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
                        <option value="kitchen">Kitchen</option>
                        <option value="bedroom">Bedroom</option>
                        <option value="bathroom">Bathroom</option>
                    </select>
                </div>

                <div class="stats">
                    <span>Score: <strong id="score">0</strong></span>
                    <span>Collected: <strong id="collected-count">0</strong>/<strong id="total-count">4</strong></span>
                </div>
            </div>
        </div>

        <div class="game-layout">
            <div id="scene" class="living-room-scene">
                <div class="wall"></div>
                <div class="floor"></div>

                <div class="room active" id="room-living-room" data-room="living-room">

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

                <div class="room" id="room-kitchen" data-room="kitchen">
                    <div class="kitchen-window interactive searchable"
                         data-target="kitchen-window"
                         data-label="Kitchen Window"
                         data-message="You inspected the kitchen window. No evidence found.">
                        <div class="kitchen-window-glass"></div>
                        <div class="furniture-label">Window</div>
                    </div>

                    <div class="fridge interactive searchable"
                         data-target="fridge"
                         data-label="Fridge"
                         data-message="You searched the fridge. No evidence found.">
                        <div class="fridge-handle"></div>
                        <div class="furniture-label">Fridge</div>
                    </div>

                    <div class="kitchen-counter interactive searchable"
                         data-target="counter"
                         data-label="Kitchen Counter"
                         data-message="You searched the kitchen counter. Check around the sink and cutting area.">
                        <div class="counter-top"></div>
                        <div class="sink"></div>
                        <div class="counter-cabinet cabinet-one"></div>
                        <div class="counter-cabinet cabinet-two"></div>
                        <div class="counter-cabinet cabinet-three"></div>
                        <div class="furniture-label">Counter</div>
                    </div>

                    <div class="stove interactive searchable"
                         data-target="stove"
                         data-label="Stove"
                         data-message="You inspected the stove area. No evidence found.">
                        <div class="burner burner-one"></div>
                        <div class="burner burner-two"></div>
                        <div class="burner burner-three"></div>
                        <div class="burner burner-four"></div>
                        <div class="furniture-label">Stove</div>
                    </div>

                    <div class="kitchen-table interactive searchable"
                         data-target="kitchen-table"
                         data-label="Kitchen Table"
                         data-message="You searched the kitchen table. Something may be relevant here.">
                        <div class="table-top"></div>
                        <div class="table-leg table-leg-one"></div>
                        <div class="table-leg table-leg-two"></div>
                        <div class="table-leg table-leg-three"></div>
                        <div class="table-leg table-leg-four"></div>
                        <div class="furniture-label">Kitchen Table</div>
                    </div>

                    <div class="trash-bin interactive searchable"
                         data-target="trash-bin"
                         data-label="Trash Bin"
                         data-message="You searched the trash bin. Check for discarded items.">
                        <div class="bin-lid"></div>
                        <div class="bin-body"></div>
                        <div class="furniture-label">Trash Bin</div>
                    </div>

                    <!-- Kitchen Evidence -->
                    <div class="evidence hidden"
                         data-name="Knife"
                         data-description="A knife found on the kitchen table."
                         data-foundin="kitchen-table"
                         style="top: 66%; left: 46%;">
                        🔪
                    </div>

                    <div class="evidence hidden"
                         data-name="Broken Glass"
                         data-description="Broken glass fragments found near the kitchen counter."
                         data-foundin="counter"
                         style="top: 58%; left: 63%;">
                        🧩
                    </div>

                    <div class="evidence hidden"
                         data-name="Receipt"
                         data-description="A receipt hidden inside the counter cabinet."
                         data-foundin="counter"
                         style="top: 69%; left: 70%;">
                        🧾
                    </div>

                    <div class="evidence hidden"
                         data-name="Glove"
                         data-description="A single glove found inside the trash bin."
                         data-foundin="trash-bin"
                         style="top: 76%; left: 84%;">
                        🧤
                    </div>

                    <!-- Kitchen Distractors -->
                    <div class="fake-item fake-apple"
                         data-name="Apple"
                         data-description="A normal apple. It is not relevant evidence."
                         style="top: 64%; left: 53%;">
                        🍎
                    </div>

                    <div class="fake-item fake-plate"
                         data-name="Plate"
                         data-description="A clean plate. It has no obvious evidential value."
                         style="top: 56%; left: 56%;">
                        🍽️
                    </div>

                    <div class="fake-item fake-mug"
                         data-name="Mug"
                         data-description="A regular mug. It does not appear to be relevant evidence."
                         style="top: 57%; left: 73%;">
                        ☕
                    </div>
                </div>

                <div class="room" id="room-bedroom" data-room="bedroom">
                    <div class="bedroom-window interactive searchable"
                         data-target="bedroom-window"
                         data-label="Bedroom Window"
                         data-message="You inspected the bedroom window. No evidence found.">
                        <div class="bedroom-window-glass"></div>
                        <div class="furniture-label">Window</div>
                    </div>

                    <div class="bed interactive searchable"
                         data-target="bed"
                         data-label="Bed"
                         data-message="You searched the bed. Check the pillow, blanket, and underneath.">
                        <div class="bed-frame"></div>
                        <div class="bed-mattress"></div>
                        <div class="bed-pillow"></div>
                        <div class="bed-blanket"></div>
                        <div class="bed-leg bedroom-leg-one"></div>
                        <div class="bed-leg bedroom-leg-two"></div>
                        <div class="furniture-label">Bed</div>
                    </div>

                    <div class="nightstand interactive searchable"
                         data-target="nightstand"
                         data-label="Nightstand"
                         data-message="You searched the nightstand drawer. Something may be hidden inside.">
                        <div class="nightstand-drawer"></div>
                        <div class="nightstand-handle"></div>
                        <div class="furniture-label">Nightstand</div>
                    </div>

                    <div class="wardrobe-bedroom interactive searchable"
                         data-target="bedroom-wardrobe"
                         data-label="Wardrobe"
                         data-message="You opened the wardrobe and checked inside.">
                        <div class="wardrobe-bedroom-door wardrobe-left"></div>
                        <div class="wardrobe-bedroom-door wardrobe-right"></div>
                        <div class="wardrobe-bedroom-handle handle-left"></div>
                        <div class="wardrobe-bedroom-handle handle-right"></div>
                        <div class="furniture-label">Wardrobe</div>
                    </div>

                    <div class="dresser interactive searchable"
                         data-target="dresser"
                         data-label="Dresser"
                         data-message="You searched the dresser drawers. No evidence found.">
                        <div class="dresser-drawer drawer-one"></div>
                        <div class="dresser-drawer drawer-two"></div>
                        <div class="dresser-drawer drawer-three"></div>
                        <div class="furniture-label">Dresser</div>
                    </div>

                    <div class="bedroom-rug interactive searchable"
                         data-target="bedroom-rug"
                         data-label="Rug"
                         data-message="You lifted the rug and searched underneath.">
                        <div class="rug-pattern"></div>
                        <div class="furniture-label">Rug</div>
                    </div>

                    <!-- Bedroom Evidence -->
                    <div class="evidence hidden"
                         data-name="Blood Stain"
                         data-description="A small blood stain found under the bed."
                         data-foundin="bed"
                         style="top: 73%; left: 39%;">
                        🩸
                    </div>

                    <div class="evidence hidden"
                         data-name="Missing Button"
                         data-description="A torn button found inside the nightstand drawer."
                         data-foundin="nightstand"
                         style="top: 56%; left: 62%;">
                        🔘
                    </div>

                    <div class="evidence hidden"
                         data-name="Hidden Letter"
                         data-description="A hidden letter found inside the wardrobe."
                         data-foundin="bedroom-wardrobe"
                         style="top: 39%; left: 81%;">
                        ✉️
                    </div>

                    <div class="evidence hidden"
                         data-name="Fabric Fibre"
                         data-description="A small fibre sample found under the bedroom rug."
                         data-foundin="bedroom-rug"
                         style="top: 82%; left: 47%;">
                        🧵
                    </div>

                    <!-- Bedroom Distractors -->
                    <div class="fake-item fake-book"
                         data-name="Magazine"
                         data-description="A normal magazine. It is not relevant evidence."
                         style="top: 49%; left: 57%;">
                        📖
                    </div>

                    <div class="fake-item fake-vase"
                         data-name="Perfume Bottle"
                         data-description="A perfume bottle on the dresser. It is not relevant evidence."
                         style="top: 45%; left: 24%;">
                        🧴
                    </div>
                </div>

                <div class="room" id="room-bathroom" data-room="bathroom">
                    <div class="bathroom-window interactive searchable"
                         data-target="bathroom-window"
                         data-label="Bathroom Window"
                         data-message="You inspected the bathroom window. No evidence found.">
                        <div class="bathroom-window-glass"></div>
                        <div class="furniture-label">Window</div>
                    </div>

                    <div class="sink-unit interactive searchable"
                         data-target="sink"
                         data-label="Sink"
                         data-message="You searched the sink area and cabinet underneath.">
                        <div class="mirror"></div>
                        <div class="sink-basin"></div>
                        <div class="tap"></div>
                        <div class="sink-cabinet"></div>
                        <div class="furniture-label">Sink</div>
                    </div>

                    <div class="toilet interactive searchable"
                         data-target="toilet"
                         data-label="Toilet"
                         data-message="You inspected the toilet area. No evidence found.">
                        <div class="toilet-tank"></div>
                        <div class="toilet-bowl"></div>
                        <div class="furniture-label">Toilet</div>
                    </div>

                    <div class="bathtub interactive searchable"
                         data-target="bathtub"
                         data-label="Bathtub"
                         data-message="You searched the bathtub and drain area.">
                        <div class="tub-body"></div>
                        <div class="tub-inner"></div>
                        <div class="shower-curtain"></div>
                        <div class="furniture-label">Bathtub</div>
                    </div>

                    <div class="laundry-basket interactive searchable"
                         data-target="laundry"
                         data-label="Laundry Basket"
                         data-message="You searched the laundry basket. Check clothing and towels.">
                        <div class="basket-body"></div>
                        <div class="basket-clothes"></div>
                        <div class="furniture-label">Laundry Basket</div>
                    </div>

                    <div class="bathroom-cabinet interactive searchable"
                         data-target="bathroom-cabinet"
                         data-label="Medicine Cabinet"
                         data-message="You opened the medicine cabinet and checked the shelves.">
                        <div class="bathroom-cabinet-door"></div>
                        <div class="cabinet-shelf shelf-one"></div>
                        <div class="cabinet-shelf shelf-two"></div>
                        <div class="furniture-label">Medicine Cabinet</div>
                    </div>

                    <!-- Bathroom Evidence -->
                    <div class="evidence hidden"
                         data-name="Hair Sample"
                         data-description="A hair sample found near the sink."
                         data-foundin="sink"
                         style="top: 53%; left: 36%;">
                        🧬
                    </div>

                    <div class="evidence hidden"
                         data-name="Wet Towel"
                         data-description="A wet towel found inside the laundry basket."
                         data-foundin="laundry"
                         style="top: 77%; left: 78%;">
                        🧻
                    </div>

                    <div class="evidence hidden"
                         data-name="Medicine Bottle"
                         data-description="A medicine bottle found inside the bathroom cabinet."
                         data-foundin="bathroom-cabinet"
                         style="top: 35%; left: 72%;">
                        💊
                    </div>

                    <div class="evidence hidden"
                         data-name="Blood Trace"
                         data-description="A small blood trace found near the bathtub drain."
                         data-foundin="bathtub"
                         style="top: 71%; left: 23%;">
                        🩸
                    </div>

                    <!-- Bathroom Distractors -->
                    <div class="fake-item fake-mug"
                         data-name="Soap"
                         data-description="A normal bar of soap. It is not relevant evidence."
                         style="top: 57%; left: 42%;">
                        🧼
                    </div>

                    <div class="fake-item fake-plate"
                         data-name="Toothbrush"
                         data-description="A toothbrush with no obvious evidential value."
                         style="top: 43%; left: 31%;">
                        🪥
                    </div>
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

                <h3>Inventory</h3>
                <div id="inventory">
                    <p class="inventory-empty">No evidence collected yet.</p>
                </div>

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


        .room {
            position: absolute;
            inset: 0;
            display: none;
        }

        .room.active {
            display: block;
        }

        /* Kitchen room */
        .kitchen-window {
            position: absolute;
            top: 10%;
            left: 40%;
            width: 160px;
            height: 100px;
            background: #9edaf0;
            border: 6px solid #4e7d84;
            border-radius: 8px;
        }

        .kitchen-window-glass {
            position: absolute;
            inset: 8px;
            background: linear-gradient(to bottom, #c9f4ff, #8cd0ec);
            border-radius: 4px;
        }

        .kitchen-window-glass::before,
        .kitchen-window-glass::after {
            content: "";
            position: absolute;
            background: rgba(255,255,255,0.75);
        }

        .kitchen-window-glass::before {
            width: 4px;
            height: 100%;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
        }

        .kitchen-window-glass::after {
            height: 4px;
            width: 100%;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .fridge {
            position: absolute;
            top: 28%;
            left: 9%;
            width: 130px;
            height: 270px;
            background: linear-gradient(to bottom, #f8fafc, #cbd5e1);
            border: 4px solid #94a3b8;
            border-radius: 12px;
            box-shadow: 8px 12px 18px rgba(0,0,0,0.20);
        }

        .fridge::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 42%;
            height: 4px;
            background: #94a3b8;
        }

        .fridge-handle {
            position: absolute;
            top: 26px;
            right: 14px;
            width: 8px;
            height: 86px;
            background: #64748b;
            border-radius: 8px;
        }

        .kitchen-counter {
            position: absolute;
            top: 48%;
            left: 36%;
            width: 360px;
            height: 150px;
        }

        .counter-top {
            position: absolute;
            top: 0;
            width: 100%;
            height: 32px;
            background: linear-gradient(to bottom, #e5e7eb, #bfc7d1);
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.18);
        }

        .sink {
            position: absolute;
            top: 7px;
            left: 40px;
            width: 80px;
            height: 20px;
            background: #94a3b8;
            border-radius: 50%;
            border: 2px solid #64748b;
        }

        .counter-cabinet {
            position: absolute;
            top: 34px;
            height: 96px;
            width: 104px;
            background: linear-gradient(to bottom, #8e4f17, #6f3e12);
            border: 2px solid #5b3412;
            border-radius: 4px;
        }

        .cabinet-one { left: 16px; }
        .cabinet-two { left: 128px; }
        .cabinet-three { left: 240px; }

        .stove {
            position: absolute;
            top: 50%;
            left: 72%;
            width: 130px;
            height: 100px;
            background: linear-gradient(to bottom, #374151, #111827);
            border-radius: 12px;
            box-shadow: 6px 10px 16px rgba(0,0,0,0.22);
        }

        .burner {
            position: absolute;
            width: 28px;
            height: 28px;
            border: 4px solid #9ca3af;
            border-radius: 50%;
        }

        .burner-one { top: 18px; left: 22px; }
        .burner-two { top: 18px; right: 22px; }
        .burner-three { bottom: 18px; left: 22px; }
        .burner-four { bottom: 18px; right: 22px; }

        .kitchen-table {
            position: absolute;
            top: 66%;
            left: 30%;
            width: 260px;
            height: 140px;
        }

        .table-top {
            position: absolute;
            top: 0;
            width: 100%;
            height: 70px;
            background: linear-gradient(to bottom, #b7791f, #8a5415);
            border-radius: 50%;
            box-shadow: 0 10px 18px rgba(0,0,0,0.22);
        }

        .table-leg {
            position: absolute;
            top: 58px;
            width: 12px;
            height: 70px;
            background: #5c3511;
            border-radius: 4px;
        }

        .table-leg-one { left: 45px; }
        .table-leg-two { left: 88px; }
        .table-leg-three { right: 88px; }
        .table-leg-four { right: 45px; }

        .trash-bin {
            position: absolute;
            top: 68%;
            right: 9%;
            width: 82px;
            height: 130px;
        }

        .bin-lid {
            position: absolute;
            top: 0;
            left: 4px;
            width: 74px;
            height: 18px;
            background: #374151;
            border-radius: 10px 10px 4px 4px;
        }

        .bin-body {
            position: absolute;
            top: 18px;
            left: 10px;
            width: 62px;
            height: 100px;
            background: linear-gradient(to bottom, #4b5563, #1f2937);
            border-radius: 6px 6px 16px 16px;
        }


        /* Bedroom room */
        .bedroom-window {
            position: absolute;
            top: 9%;
            left: 42%;
            width: 145px;
            height: 95px;
            background: #9edaf0;
            border: 6px solid #4e7d84;
            border-radius: 8px;
        }

        .bedroom-window-glass {
            position: absolute;
            inset: 8px;
            background: linear-gradient(to bottom, #c9f4ff, #8cd0ec);
            border-radius: 4px;
        }

        .bedroom-window-glass::before,
        .bedroom-window-glass::after {
            content: "";
            position: absolute;
            background: rgba(255,255,255,0.75);
        }

        .bedroom-window-glass::before {
            width: 4px;
            height: 100%;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
        }

        .bedroom-window-glass::after {
            height: 4px;
            width: 100%;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .bed {
            position: absolute;
            top: 52%;
            left: 22%;
            width: 300px;
            height: 160px;
        }

        .bed-frame {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to bottom, #6f4c33, #4f3422);
            border-radius: 14px;
            box-shadow: 0 12px 20px rgba(0,0,0,0.24);
        }

        .bed-mattress {
            position: absolute;
            top: 20px;
            left: 18px;
            width: 264px;
            height: 80px;
            background: linear-gradient(to bottom, #f8fafc, #d8dde3);
            border-radius: 14px;
        }

        .bed-pillow {
            position: absolute;
            top: 30px;
            left: 32px;
            width: 86px;
            height: 34px;
            background: linear-gradient(to bottom, #ffffff, #e7ebef);
            border-radius: 22px;
        }

        .bed-blanket {
            position: absolute;
            top: 48px;
            left: 104px;
            width: 160px;
            height: 54px;
            background: linear-gradient(to bottom, #2563eb, #1d4ed8);
            border-radius: 16px 16px 22px 22px;
        }

        .bed-leg {
            position: absolute;
            bottom: -6px;
            width: 12px;
            height: 24px;
            background: #4a3020;
            border-radius: 3px;
        }

        .bedroom-leg-one { left: 18px; }
        .bedroom-leg-two { right: 18px; }

        .nightstand {
            position: absolute;
            top: 52%;
            left: 58%;
            width: 95px;
            height: 105px;
            background: linear-gradient(to bottom, #8e4f17, #6f3e12);
            border-radius: 8px;
            box-shadow: 6px 10px 16px rgba(0,0,0,0.22);
        }

        .nightstand-drawer {
            position: absolute;
            top: 16px;
            left: 10px;
            width: 75px;
            height: 34px;
            background: #a65f1c;
            border: 2px solid #5b3412;
            border-radius: 4px;
        }

        .nightstand-handle {
            position: absolute;
            top: 31px;
            left: 41px;
            width: 16px;
            height: 5px;
            background: #d7c08a;
            border-radius: 6px;
        }

        .wardrobe-bedroom {
            position: absolute;
            top: 22%;
            right: 7%;
            width: 145px;
            height: 275px;
            background: linear-gradient(to bottom, #5d3b24, #70482a);
            border-radius: 10px;
            box-shadow: 8px 14px 22px rgba(0,0,0,0.28);
        }

        .wardrobe-bedroom-door {
            position: absolute;
            top: 8px;
            width: 46%;
            height: calc(100% - 16px);
            background: linear-gradient(to bottom, #7a4d2b, #5c381f);
            border: 2px solid rgba(0,0,0,0.2);
            border-radius: 6px;
        }

        .wardrobe-left { left: 4px; }
        .wardrobe-right { right: 4px; }

        .wardrobe-bedroom-handle {
            position: absolute;
            top: 48%;
            width: 7px;
            height: 34px;
            background: #d1b06b;
            border-radius: 4px;
        }

        .handle-left { left: 60px; }
        .handle-right { right: 60px; }

        .dresser {
            position: absolute;
            top: 38%;
            left: 8%;
            width: 150px;
            height: 145px;
            background: linear-gradient(to bottom, #8e4f17, #6f3e12);
            border-radius: 10px;
            box-shadow: 6px 10px 16px rgba(0,0,0,0.22);
        }

        .dresser-drawer {
            position: absolute;
            left: 14px;
            width: 122px;
            height: 34px;
            background: #a65f1c;
            border: 2px solid #5b3412;
            border-radius: 4px;
        }

        .drawer-one { top: 14px; }
        .drawer-two { top: 55px; }
        .drawer-three { top: 96px; }

        .bedroom-rug {
            position: absolute;
            top: 79%;
            left: 34%;
            width: 340px;
            height: 80px;
            background: radial-gradient(circle at center, #334155, #1e293b);
            border-radius: 50%;
            box-shadow: 0 8px 14px rgba(0,0,0,0.18);
        }

        .rug-pattern {
            position: absolute;
            inset: 12px 18px;
            border: 3px solid rgba(255,255,255,0.25);
            border-radius: 50%;
        }

        /* Bathroom room */
        .bathroom-window {
            position: absolute;
            top: 9%;
            left: 44%;
            width: 135px;
            height: 90px;
            background: #9edaf0;
            border: 6px solid #4e7d84;
            border-radius: 8px;
        }

        .bathroom-window-glass {
            position: absolute;
            inset: 8px;
            background: linear-gradient(to bottom, #c9f4ff, #8cd0ec);
            border-radius: 4px;
        }

        .bathroom-window-glass::before,
        .bathroom-window-glass::after {
            content: "";
            position: absolute;
            background: rgba(255,255,255,0.75);
        }

        .bathroom-window-glass::before {
            width: 4px;
            height: 100%;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
        }

        .bathroom-window-glass::after {
            height: 4px;
            width: 100%;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .sink-unit {
            position: absolute;
            top: 30%;
            left: 28%;
            width: 170px;
            height: 250px;
        }

        .mirror {
            position: absolute;
            top: 0;
            left: 34px;
            width: 100px;
            height: 90px;
            background: linear-gradient(135deg, #dff7ff, #9edaf0);
            border: 6px solid #64748b;
            border-radius: 10px;
        }

        .sink-basin {
            position: absolute;
            top: 112px;
            left: 18px;
            width: 134px;
            height: 46px;
            background: #f8fafc;
            border: 4px solid #cbd5e1;
            border-radius: 50%;
        }

        .tap {
            position: absolute;
            top: 95px;
            left: 78px;
            width: 16px;
            height: 30px;
            background: #64748b;
            border-radius: 8px 8px 0 0;
        }

        .sink-cabinet {
            position: absolute;
            top: 148px;
            left: 28px;
            width: 114px;
            height: 82px;
            background: linear-gradient(to bottom, #8e4f17, #6f3e12);
            border-radius: 8px;
            box-shadow: 6px 10px 16px rgba(0,0,0,0.18);
        }

        .toilet {
            position: absolute;
            top: 48%;
            left: 57%;
            width: 130px;
            height: 160px;
        }

        .toilet-tank {
            position: absolute;
            top: 0;
            left: 24px;
            width: 82px;
            height: 56px;
            background: #f8fafc;
            border: 4px solid #cbd5e1;
            border-radius: 8px;
        }

        .toilet-bowl {
            position: absolute;
            top: 58px;
            left: 16px;
            width: 98px;
            height: 82px;
            background: #f8fafc;
            border: 4px solid #cbd5e1;
            border-radius: 50% 50% 18px 18px;
        }

        .bathtub {
            position: absolute;
            top: 62%;
            left: 7%;
            width: 260px;
            height: 130px;
        }

        .tub-body {
            position: absolute;
            bottom: 0;
            width: 250px;
            height: 80px;
            background: linear-gradient(to bottom, #f8fafc, #cbd5e1);
            border-radius: 16px 16px 42px 42px;
            border: 4px solid #94a3b8;
            box-shadow: 0 10px 18px rgba(0,0,0,0.20);
        }

        .tub-inner {
            position: absolute;
            bottom: 38px;
            left: 28px;
            width: 192px;
            height: 30px;
            background: #dff7ff;
            border-radius: 50%;
        }

        .shower-curtain {
            position: absolute;
            top: 0;
            right: 8px;
            width: 70px;
            height: 92px;
            background: repeating-linear-gradient(
                to bottom,
                rgba(147,197,253,0.95) 0px,
                rgba(147,197,253,0.95) 10px,
                rgba(219,234,254,0.95) 10px,
                rgba(219,234,254,0.95) 20px
            );
            border-radius: 8px;
        }

        .laundry-basket {
            position: absolute;
            top: 66%;
            right: 9%;
            width: 110px;
            height: 120px;
        }

        .basket-body {
            position: absolute;
            bottom: 0;
            left: 12px;
            width: 86px;
            height: 94px;
            background: linear-gradient(to bottom, #9ca3af, #64748b);
            border-radius: 8px 8px 18px 18px;
        }

        .basket-clothes {
            position: absolute;
            top: 4px;
            left: 22px;
            width: 66px;
            height: 34px;
            background: radial-gradient(circle at 30% 50%, #ef4444 0 18px, transparent 19px),
                        radial-gradient(circle at 70% 55%, #2563eb 0 18px, transparent 19px),
                        radial-gradient(circle at 50% 30%, #f8fafc 0 18px, transparent 19px);
        }

        .bathroom-cabinet {
            position: absolute;
            top: 23%;
            right: 12%;
            width: 145px;
            height: 180px;
            background: linear-gradient(to bottom, #e5e7eb, #cbd5e1);
            border: 4px solid #94a3b8;
            border-radius: 10px;
            box-shadow: 6px 10px 16px rgba(0,0,0,0.18);
        }

        .bathroom-cabinet-door {
            position: absolute;
            inset: 10px;
            background: rgba(255,255,255,0.45);
            border: 2px solid #94a3b8;
            border-radius: 6px;
        }

        .cabinet-shelf {
            position: absolute;
            left: 16px;
            right: 16px;
            height: 5px;
            background: #94a3b8;
        }

        .shelf-one { top: 65px; }
        .shelf-two { top: 115px; }

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

        #inventory {
            min-height: 72px;
            background: #ffffff;
            border: 2px dashed #cbd5e1;
            border-radius: 12px;
            padding: 10px;
            margin: 10px 0 18px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: flex-start;
        }

        .inventory-empty {
            margin: 0;
            color: #64748b;
            font-size: 14px;
        }

        .inventory-card {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #eef2ff;
            border: 1px solid #c7d2fe;
            border-radius: 10px;
            padding: 8px 10px;
            font-size: 14px;
            font-weight: 700;
            max-width: 100%;
        }

        .inventory-icon {
            font-size: 24px;
            line-height: 1;
        }

        .inventory-name {
            overflow-wrap: anywhere;
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
            const totalCountEl = document.getElementById('total-count');
            const logEl = document.getElementById('log');
            const inventoryEl = document.getElementById('inventory');

            let score = 0;
            let collectedCount = 0;
            let totalEvidenceThisGame = 0;
            let selectedFurniture = null;
            let selectedItem = null;

            function getActiveRoom() { return document.querySelector('.room.active'); }
            function getAllRooms() { return document.querySelectorAll('.room'); }
            function getAllSearchableObjects() { return document.querySelectorAll('.searchable'); }
            function getAllGameItems() { return document.querySelectorAll('.evidence, .fake-item'); }

            function addLog(text) {
                const li = document.createElement('li');
                li.textContent = text;
                logEl.appendChild(li);
            }

            function clearInventory() {
                inventoryEl.innerHTML = '<p class="inventory-empty">No evidence collected yet.</p>';
            }

            function addToInventory(item) {
                const emptyMessage = inventoryEl.querySelector('.inventory-empty');
                if (emptyMessage) emptyMessage.remove();

                const card = document.createElement('div');
                card.className = 'inventory-card';

                const icon = document.createElement('span');
                icon.className = 'inventory-icon';
                icon.textContent = item.textContent.trim();

                const name = document.createElement('span');
                name.className = 'inventory-name';
                name.textContent = item.dataset.name;

                const room = document.createElement('span');
                room.className = 'inventory-room';
                const roomElement = item.closest('.room');
                const roomOption = [...roomSelect.options].find(option => 'room-' + option.value === roomElement.id);
                room.textContent = roomOption ? roomOption.text : 'Unknown room';

                card.appendChild(icon);
                card.appendChild(name);
                card.appendChild(room);
                inventoryEl.appendChild(card);
            }

            function updateStats() {
                scoreEl.textContent = score;
                collectedCountEl.textContent = collectedCount;
                totalCountEl.textContent = totalEvidenceThisGame;
            }

            function clearFurnitureSelection() {
                getAllSearchableObjects().forEach(obj => obj.classList.remove('selected-furniture'));
                selectedFurniture = null;
            }

            function clearItemSelection() {
                getAllGameItems().forEach(item => item.classList.remove('selected-ring'));
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

            function getSearchTargetsForRoom(room) {
                return [...room.querySelectorAll('.searchable')].map(obj => obj.dataset.target).filter(Boolean);
            }

            function chooseRandomLocation(targets, noneChance) {
                const options = [...targets, '__none'];
                const noneWeight = Math.max(1, Math.round(targets.length * noneChance));
                for (let i = 1; i < noneWeight; i++) options.push('__none');
                return options[Math.floor(Math.random() * options.length)];
            }

            function positionItemNearTarget(item, targetObject) {
                const room = targetObject.closest('.room');
                const roomRect = room.getBoundingClientRect();
                const targetRect = targetObject.getBoundingClientRect();
                const centerX = ((targetRect.left + targetRect.width / 2) - roomRect.left) / roomRect.width * 100;
                const centerY = ((targetRect.top + targetRect.height / 2) - roomRect.top) / roomRect.height * 100;
                const finalX = Math.min(92, Math.max(8, centerX + (Math.random() * 10) - 5));
                const finalY = Math.min(90, Math.max(10, centerY + (Math.random() * 8) - 4));
                item.style.left = finalX + '%';
                item.style.top = finalY + '%';
            }


            function randomiseHiddenItems() {
                totalEvidenceThisGame = 0;

                getAllRooms().forEach(room => {
                    const targets = getSearchTargetsForRoom(room);
                    const roomItems = room.querySelectorAll('.evidence, .fake-item');

                    roomItems.forEach(item => {
                        item.classList.remove('collected', 'selected-ring');
                        item.style.display = 'none';

                        const isEvidence = item.classList.contains('evidence');
                        const noneChance = isEvidence ? 0.35 : 0.45;
                        const location = chooseRandomLocation(targets, noneChance);

                        item.dataset.foundin = location;
                        item.dataset.active = location === '__none' ? 'false' : 'true';

                        if (isEvidence && location !== '__none') totalEvidenceThisGame += 1;
                    });
                });
            }

            function startNewGame() {
                score = 0;
                collectedCount = 0;
                selectedFurniture = null;
                selectedItem = null;

                clearFurnitureSelection();
                clearItemSelection();
                clearInventory();
                getAllSearchableObjects().forEach(obj => obj.classList.remove('open'));
                randomiseHiddenItems();

                logEl.innerHTML = '';
                resetPanel();
                updateStats();
                statusMessage.textContent = 'New investigation started. Search each room to find evidence.';
                addLog('New investigation started. Hidden items have been randomised.');
            }

            function bindFurnitureEvents() {
                getAllSearchableObjects().forEach(obj => {
                    obj.addEventListener('click', function() {
                        if (!this.closest('.room').classList.contains('active')) return;

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

            function bindItemEvents() {
                getAllGameItems().forEach(item => {
                    item.addEventListener('click', function() {
                        if (!this.closest('.room').classList.contains('active')) return;
                        if (this.classList.contains('collected')) return;

                        clearItemSelection();
                        clearFurnitureSelection();

                        this.classList.add('selected-ring');
                        selectedItem = this;
                        setPanel(this.dataset.name, this.dataset.description);

                        if (this.classList.contains('evidence')) {
                            statusMessage.textContent = 'Evidence selected. Press "Collect Evidence" to store it.';
                        } else {
                            statusMessage.textContent = 'Item selected. Press "Collect Evidence" to analyze it.';
                        }

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

                const hiddenItems = getActiveRoom().querySelectorAll('.evidence[data-foundin="' + target + '"], .fake-item[data-foundin="' + target + '"]');
                let foundVisibleItem = false;

                hiddenItems.forEach(item => {
                    if (!item.classList.contains('collected')) {
                        positionItemNearTarget(item, selectedFurniture);
                        item.style.display = 'flex';
                        foundVisibleItem = true;
                    }
                });

                if (foundVisibleItem) {
                    statusMessage.textContent = message;
                    addLog('Searched: ' + label);
                } else {
                    statusMessage.textContent = 'You searched ' + label + '. No evidence found.';
                    addLog('No evidence found: ' + label);
                }
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
                    addToInventory(selectedItem);
                    statusMessage.textContent = 'Evidence collected: ' + selectedItem.dataset.name;
                    setPanel(selectedItem.dataset.name, 'This evidence has been collected and added to the inventory.');

                    if (collectedCount === totalEvidenceThisGame) {
                        statusMessage.textContent = 'Investigation complete. All active evidence has been collected across all rooms.';
                        addLog('Investigation complete: all active evidence collected.');
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
                startNewGame();
            });

            roomSelect.addEventListener('change', function() {
                document.querySelectorAll('.room').forEach(room => room.classList.remove('active'));
                document.getElementById('room-' + this.value).classList.add('active');

                clearFurnitureSelection();
                clearItemSelection();
                resetPanel();
                updateStats();

                statusMessage.textContent = 'Room changed to ' + this.options[this.selectedIndex].text + '. Continue the investigation.';
                addLog('Moved to room: ' + this.options[this.selectedIndex].text);
            });

            bindFurnitureEvents();
            bindItemEvents();
            startNewGame();
        })();
    </script>
    <?php
    return ob_get_clean();
}

add_shortcode('crime_game', 'crime_scene_game');
?>
