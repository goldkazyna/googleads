<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет — Promo Ads</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f4f6f9;
            --sidebar-bg: #ffffff;
            --card-bg: #ffffff;
            --primary: #1a73e8;
            --primary-light: #e8f0fe;
            --primary-dark: #1557b0;
            --text: #1f2937;
            --text-secondary: #6b7280;
            --text-muted: #9ca3af;
            --border: #e5e7eb;
            --green: #10b981;
            --green-light: #d1fae5;
            --orange: #f59e0b;
            --orange-light: #fef3c7;
            --red: #ef4444;
            --red-light: #fee2e2;
            --chat-admin: #f0f4ff;
            --chat-user: #1a73e8;
            --radius: 12px;
            --radius-sm: 8px;
            --shadow: 0 1px 3px rgba(0,0,0,0.06), 0 1px 2px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Manrope', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
        }

        /* ── Sidebar ── */
        .sidebar {
            width: 260px;
            background: var(--sidebar-bg);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: 100;
            transition: transform 0.3s ease;
        }

        .sidebar-header {
            padding: 24px 20px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-logo {
            width: 36px;
            height: 36px;
            background: var(--primary);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 800;
            font-size: 16px;
        }

        .sidebar-brand {
            font-weight: 700;
            font-size: 17px;
            letter-spacing: -0.3px;
        }

        .sidebar-brand span {
            color: var(--primary);
        }

        .sidebar-nav {
            padding: 16px 12px;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 14px;
            border-radius: var(--radius-sm);
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-secondary);
            transition: all 0.15s;
            text-decoration: none;
            position: relative;
        }

        .nav-item:hover {
            background: var(--bg);
            color: var(--text);
        }

        .nav-item.active {
            background: var(--primary-light);
            color: var(--primary);
            font-weight: 600;
        }

        .nav-item svg {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }

        .nav-badge {
            margin-left: auto;
            background: var(--red);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 10px;
            min-width: 20px;
            text-align: center;
        }

        .nav-divider {
            height: 1px;
            background: var(--border);
            margin: 12px 6px;
        }

        .sidebar-footer {
            padding: 16px 12px;
            border-top: 1px solid var(--border);
        }

        .user-card {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border-radius: var(--radius-sm);
            cursor: pointer;
            transition: background 0.15s;
        }

        .user-card:hover {
            background: var(--bg);
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), #6366f1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            font-size: 14px;
        }

        .user-info {
            flex: 1;
            min-width: 0;
        }

        .user-name {
            font-size: 13px;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-email {
            font-size: 11px;
            color: var(--text-muted);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* ── Main Content ── */
        .main {
            margin-left: 260px;
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .topbar {
            height: 64px;
            background: var(--card-bg);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .topbar-title {
            font-size: 18px;
            font-weight: 700;
            letter-spacing: -0.3px;
        }

        .burger {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
        }

        .burger svg {
            width: 24px;
            height: 24px;
            color: var(--text);
        }

        .topbar-actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .topbar-btn {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 1px solid var(--border);
            background: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.15s;
            position: relative;
        }

        .topbar-btn:hover {
            background: var(--bg);
        }

        .topbar-btn svg {
            width: 18px;
            height: 18px;
            color: var(--text-secondary);
        }

        .topbar-btn .dot {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 8px;
            height: 8px;
            background: var(--red);
            border-radius: 50%;
            border: 2px solid #fff;
        }

        .content {
            padding: 28px 32px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* ── Tabs ── */
        .tabs {
            display: flex;
            gap: 4px;
            margin-bottom: 24px;
            background: var(--card-bg);
            padding: 4px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            width: fit-content;
        }

        .tab {
            padding: 9px 20px;
            border-radius: var(--radius-sm);
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            color: var(--text-secondary);
            transition: all 0.2s;
            border: none;
            background: none;
        }

        .tab:hover {
            color: var(--text);
        }

        .tab.active {
            background: var(--primary);
            color: #fff;
        }

        /* ── Panel Sections ── */
        .panel-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            flex: 1;
        }

        /* ── Orders Section ── */
        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .card-header {
            padding: 18px 22px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-title {
            font-size: 15px;
            font-weight: 700;
            letter-spacing: -0.2px;
        }

        .card-count {
            font-size: 12px;
            color: var(--text-muted);
            background: var(--bg);
            padding: 3px 10px;
            border-radius: 20px;
            font-weight: 600;
        }

        /* ── Orders List ── */
        .orders-list {
            flex: 1;
            overflow-y: auto;
            max-height: 520px;
        }

        .order-item {
            padding: 16px 22px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 14px;
            transition: background 0.1s;
            cursor: pointer;
        }

        .order-item:hover {
            background: #fafbfc;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .order-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .order-icon.coupon {
            background: var(--primary-light);
            color: var(--primary);
        }

        .order-icon.account {
            background: var(--green-light);
            color: var(--green);
        }

        .order-icon.bonus {
            background: var(--orange-light);
            color: var(--orange);
        }

        .order-icon svg {
            width: 20px;
            height: 20px;
        }

        .order-details {
            flex: 1;
            min-width: 0;
        }

        .order-name {
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .order-meta {
            font-size: 12px;
            color: var(--text-muted);
        }

        .order-right {
            text-align: right;
            flex-shrink: 0;
        }

        .order-price {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 3px;
        }

        .order-status {
            font-size: 11px;
            font-weight: 600;
            padding: 3px 9px;
            border-radius: 6px;
            display: inline-block;
        }

        .status-done {
            background: var(--green-light);
            color: #059669;
        }

        .status-pending {
            background: var(--orange-light);
            color: #d97706;
        }

        .status-process {
            background: var(--primary-light);
            color: var(--primary);
        }

        .status-cancelled {
            background: var(--red-light);
            color: var(--red);
        }

        /* ── Chat Section ── */
        .chat-card {
            display: flex;
            flex-direction: column;
        }

        .chat-messages {
            flex: 1;
            overflow-y: auto;
            padding: 20px 22px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            max-height: 520px;
            min-height: 300px;
        }

        .chat-date-divider {
            text-align: center;
            font-size: 11px;
            color: var(--text-muted);
            font-weight: 600;
            padding: 8px 0;
            position: relative;
        }

        .chat-date-divider::before,
        .chat-date-divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: calc(50% - 50px);
            height: 1px;
            background: var(--border);
        }

        .chat-date-divider::before { left: 0; }
        .chat-date-divider::after { right: 0; }

        .message {
            display: flex;
            gap: 10px;
            max-width: 85%;
            animation: fadeInMsg 0.3s ease;
        }

        @keyframes fadeInMsg {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .message.admin {
            align-self: flex-start;
        }

        .message.user {
            align-self: flex-end;
            flex-direction: row-reverse;
        }

        .msg-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
        }

        .msg-avatar.admin-av {
            background: linear-gradient(135deg, #1a73e8, #4285f4);
            color: #fff;
        }

        .msg-avatar.user-av {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: #fff;
        }

        .msg-content {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .msg-bubble {
            padding: 10px 14px;
            border-radius: 14px;
            font-size: 13px;
            line-height: 1.5;
            word-break: break-word;
        }

        .message.admin .msg-bubble {
            background: var(--chat-admin);
            color: var(--text);
            border-bottom-left-radius: 4px;
        }

        .message.user .msg-bubble {
            background: var(--chat-user);
            color: #fff;
            border-bottom-right-radius: 4px;
        }

        .msg-time {
            font-size: 10px;
            color: var(--text-muted);
            padding: 0 4px;
        }

        .message.user .msg-time {
            text-align: right;
        }

        .msg-attachment {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.15);
            padding: 8px 12px;
            border-radius: 8px;
            margin-top: 6px;
            font-size: 12px;
            cursor: pointer;
            transition: background 0.15s;
        }

        .message.admin .msg-attachment {
            background: rgba(0,0,0,0.04);
        }

        .msg-attachment:hover {
            background: rgba(255,255,255,0.25);
        }

        .message.admin .msg-attachment:hover {
            background: rgba(0,0,0,0.07);
        }

        .msg-attachment svg {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
        }

        /* ── Chat Input ── */
        .chat-input-area {
            padding: 14px 18px;
            border-top: 1px solid var(--border);
            display: flex;
            align-items: flex-end;
            gap: 10px;
            background: #fafbfc;
        }

        .chat-input-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: #fff;
            border: 1.5px solid var(--border);
            border-radius: 12px;
            transition: border-color 0.2s;
            overflow: hidden;
        }

        .chat-input-wrapper:focus-within {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1);
        }

        .chat-input-wrapper textarea {
            width: 100%;
            border: none;
            outline: none;
            padding: 12px 14px 6px;
            font-family: inherit;
            font-size: 13px;
            resize: none;
            min-height: 40px;
            max-height: 120px;
            line-height: 1.5;
            color: var(--text);
        }

        .chat-input-wrapper textarea::placeholder {
            color: var(--text-muted);
        }

        .chat-input-tools {
            display: flex;
            align-items: center;
            padding: 4px 8px 8px;
            gap: 2px;
        }

        .input-tool-btn {
            width: 32px;
            height: 32px;
            border: none;
            background: none;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            transition: all 0.15s;
        }

        .input-tool-btn:hover {
            background: var(--bg);
            color: var(--text-secondary);
        }

        .input-tool-btn svg {
            width: 18px;
            height: 18px;
        }

        .chat-send-btn {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            border: none;
            background: var(--primary);
            color: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
            flex-shrink: 0;
        }

        .chat-send-btn:hover {
            background: var(--primary-dark);
            transform: scale(1.05);
        }

        .chat-send-btn:active {
            transform: scale(0.95);
        }

        .chat-send-btn svg {
            width: 18px;
            height: 18px;
        }

        /* ── Quick Actions ── */
        .quick-actions {
            display: flex;
            gap: 6px;
            padding: 0 18px 12px;
            background: #fafbfc;
            flex-wrap: wrap;
        }

        .quick-action {
            padding: 5px 12px;
            border-radius: 20px;
            border: 1px solid var(--border);
            background: #fff;
            font-size: 11px;
            font-weight: 600;
            color: var(--text-secondary);
            cursor: pointer;
            transition: all 0.15s;
        }

        .quick-action:hover {
            border-color: var(--primary);
            color: var(--primary);
            background: var(--primary-light);
        }

        /* ── Typing indicator ── */
        .typing-indicator {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 0 22px 8px;
            font-size: 12px;
            color: var(--text-muted);
        }

        .typing-dots {
            display: flex;
            gap: 3px;
        }

        .typing-dots span {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--text-muted);
            animation: typing 1.4s infinite;
        }

        .typing-dots span:nth-child(2) { animation-delay: 0.2s; }
        .typing-dots span:nth-child(3) { animation-delay: 0.4s; }

        @keyframes typing {
            0%, 60%, 100% { opacity: 0.3; transform: scale(0.8); }
            30% { opacity: 1; transform: scale(1); }
        }

        /* ── Account Transfer Widget ── */
        .transfer-widget {
            margin: 8px 22px 0;
            background: linear-gradient(135deg, #f0f7ff 0%, #e8f4e8 100%);
            border: 1px solid #d0e3f0;
            border-radius: 10px;
            padding: 14px 16px;
        }

        .transfer-widget-title {
            font-size: 12px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .transfer-widget-title svg {
            width: 16px;
            height: 16px;
        }

        .transfer-fields {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .transfer-field {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .transfer-field label {
            font-size: 11px;
            font-weight: 600;
            color: var(--text-secondary);
            min-width: 70px;
        }

        .transfer-field input {
            flex: 1;
            padding: 7px 10px;
            border-radius: 8px;
            border: 1px solid var(--border);
            font-family: inherit;
            font-size: 12px;
            outline: none;
            background: #fff;
            transition: border-color 0.2s;
        }

        .transfer-field input:focus {
            border-color: var(--primary);
        }

        .transfer-submit {
            margin-top: 8px;
            padding: 8px 16px;
            border: none;
            background: var(--primary);
            color: #fff;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            font-family: inherit;
            cursor: pointer;
            transition: background 0.15s;
            width: 100%;
        }

        .transfer-submit:hover {
            background: var(--primary-dark);
        }

        /* ── Scrollbar ── */
        .chat-messages::-webkit-scrollbar,
        .orders-list::-webkit-scrollbar {
            width: 5px;
        }

        .chat-messages::-webkit-scrollbar-track,
        .orders-list::-webkit-scrollbar-track {
            background: transparent;
        }

        .chat-messages::-webkit-scrollbar-thumb,
        .orders-list::-webkit-scrollbar-thumb {
            background: #d1d5db;
            border-radius: 10px;
        }

        /* ── Overlay for mobile ── */
        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.4);
            z-index: 99;
        }

        /* ── Responsive ── */
        @media (max-width: 1024px) {
            .panel-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .sidebar-overlay.open {
                display: block;
            }

            .main {
                margin-left: 0;
            }

            .burger {
                display: flex;
            }

            .content {
                padding: 20px 16px;
            }

            .topbar {
                padding: 0 16px;
            }

            .tabs {
                width: 100%;
            }

            .tab {
                flex: 1;
                text-align: center;
                padding: 9px 12px;
            }
        }
    </style>
</head>
<body>

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <a href="/"><img src="{{ asset('logo.jpg') }}" alt="Google Promo Ads" style="height:36px;"></a>
    </div>

    <nav class="sidebar-nav">
        <a class="nav-item active" href="#">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/></svg>
            Заказы
        </a>
    </nav>

    <div class="sidebar-footer">
        <div class="user-card">
            <div class="user-avatar">ДД</div>
            <div class="user-info">
                <div class="user-name">Денис Дудников</div>
                <div class="user-email">goldkazyna5@gmail.com</div>
            </div>
        </div>
        <form method="POST" action="{{ route('logout') }}" style="margin-top:8px;">
            @csrf
            <button type="submit" style="width:100%;padding:8px;border:1px solid #e5e7eb;border-radius:8px;background:none;font-family:inherit;font-size:13px;font-weight:500;color:#6b7280;cursor:pointer;transition:all 0.15s;" onmouseover="this.style.background='#f4f6f9'" onmouseout="this.style.background='none'">Выйти</button>
        </form>
    </div>
</aside>

<!-- Main -->
<main class="main">
    <!-- Top Bar -->
    <header class="topbar">
        <div style="display:flex;align-items:center;gap:12px;">
            <button class="burger" onclick="toggleSidebar()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            </button>
            <h1 class="topbar-title">Личный кабинет</h1>
        </div>
        <div class="topbar-actions">
            <button class="topbar-btn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>
                <span class="dot"></span>
            </button>
        </div>
    </header>

    <div class="content">

        <div class="panel-grid" id="panelView">
            <!-- Таблица заказов -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Заказы</span>
                    <span class="card-count">11 заказов</span>
                </div>
                <div style="overflow-x:auto;">
                    <table style="width:100%;border-collapse:collapse;font-size:13px;">
                        <thead>
                            <tr style="background:var(--bg);border-bottom:1px solid var(--border);">
                                <th style="padding:12px 18px;text-align:left;font-weight:600;color:var(--text-secondary);font-size:12px;">#</th>
                                <th style="padding:12px 18px;text-align:left;font-weight:600;color:var(--text-secondary);font-size:12px;">Email</th>
                                <th style="padding:12px 18px;text-align:left;font-weight:600;color:var(--text-secondary);font-size:12px;">Сумма</th>
                                <th style="padding:12px 18px;text-align:left;font-weight:600;color:var(--text-secondary);font-size:12px;">Дата</th>
                                <th style="padding:12px 18px;text-align:left;font-weight:600;color:var(--text-secondary);font-size:12px;">Статус</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="order-row" data-client="aben.nur@mail.ru" data-chat="chat-aben" onclick="openChat(this)" style="border-bottom:1px solid var(--border);transition:background 0.1s;cursor:pointer;" onmouseover="this.style.background='#fafbfc'" onmouseout="if(!this.classList.contains('selected'))this.style.background='transparent'">
                                <td style="padding:14px 18px;font-weight:600;color:var(--text);">1042</td>
                                <td style="padding:14px 18px;">
                                    <div style="font-weight:600;color:var(--text);">aben.nur@mail.ru</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span style="font-weight:700;color:var(--text);">7 592 KZT</span>
                                </td>
                                <td style="padding:14px 18px;color:var(--text-secondary);">
                                    <div>15 фев 2026</div>
                                    <div style="font-size:11px;color:var(--text-muted);">20:15</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span class="order-status status-done">Исполнен</span>
                                </td>
                            </tr>
                            <tr class="order-row" data-client="ddddreasa83@list.ru" data-chat="chat-ddd" onclick="openChat(this)" style="border-bottom:1px solid var(--border);transition:background 0.1s;cursor:pointer;" onmouseover="this.style.background='#fafbfc'" onmouseout="if(!this.classList.contains('selected'))this.style.background='transparent'">
                                <td style="padding:14px 18px;font-weight:600;color:var(--text);">1041</td>
                                <td style="padding:14px 18px;">
                                    <div style="font-weight:600;color:var(--text);">ddddreasa83@list.ru</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span style="font-weight:700;color:var(--text);">16 268 KZT</span>
                                </td>
                                <td style="padding:14px 18px;color:var(--text-secondary);">
                                    <div>15 фев 2026</div>
                                    <div style="font-size:11px;color:var(--text-muted);">12:40</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span class="order-status status-done">Исполнен</span>
                                </td>
                            </tr>
                            <tr class="order-row" data-client="k.ivanova_98@inbox.ru" data-chat="chat-ivanova" onclick="openChat(this)" style="border-bottom:1px solid var(--border);transition:background 0.1s;cursor:pointer;" onmouseover="this.style.background='#fafbfc'" onmouseout="if(!this.classList.contains('selected'))this.style.background='transparent'">
                                <td style="padding:14px 18px;font-weight:600;color:var(--text);">1040</td>
                                <td style="padding:14px 18px;">
                                    <div style="font-weight:600;color:var(--text);">k.ivanova_98@inbox.ru</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span style="font-weight:700;color:var(--text);">7 592 KZT</span>
                                </td>
                                <td style="padding:14px 18px;color:var(--text-secondary);">
                                    <div>14 фев 2026</div>
                                    <div style="font-size:11px;color:var(--text-muted);">18:30</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span class="order-status status-done">Исполнен</span>
                                </td>
                            </tr>
                            <tr class="order-row" data-client="sergey.malikov@gmail.com" data-chat="chat-malikov" onclick="openChat(this)" style="border-bottom:1px solid var(--border);transition:background 0.1s;cursor:pointer;" onmouseover="this.style.background='#fafbfc'" onmouseout="if(!this.classList.contains('selected'))this.style.background='transparent'">
                                <td style="padding:14px 18px;font-weight:600;color:var(--text);">1039</td>
                                <td style="padding:14px 18px;">
                                    <div style="font-weight:600;color:var(--text);">sergey.malikov@gmail.com</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span style="font-weight:700;color:var(--text);">7 592 KZT</span>
                                </td>
                                <td style="padding:14px 18px;color:var(--text-secondary);">
                                    <div>14 фев 2026</div>
                                    <div style="font-size:11px;color:var(--text-muted);">09:24</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span class="order-status status-done">Исполнен</span>
                                </td>
                            </tr>
                            <tr class="order-row" data-client="bekzat_01@mail.ru" data-chat="chat-bekzat" onclick="openChat(this)" style="border-bottom:1px solid var(--border);transition:background 0.1s;cursor:pointer;" onmouseover="this.style.background='#fafbfc'" onmouseout="if(!this.classList.contains('selected'))this.style.background='transparent'">
                                <td style="padding:14px 18px;font-weight:600;color:var(--text);">1038</td>
                                <td style="padding:14px 18px;">
                                    <div style="font-weight:600;color:var(--text);">bekzat_01@mail.ru</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span style="font-weight:700;color:var(--text);">7 692 KZT</span>
                                </td>
                                <td style="padding:14px 18px;color:var(--text-secondary);">
                                    <div>13 фев 2026</div>
                                    <div style="font-size:11px;color:var(--text-muted);">16:51</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span class="order-status status-done">Исполнен</span>
                                </td>
                            </tr>
                            <tr class="order-row" data-client="a.nurlan_kz@mail.ru" data-chat="chat-nurlan" onclick="openChat(this)" style="border-bottom:1px solid var(--border);transition:background 0.1s;cursor:pointer;" onmouseover="this.style.background='#fafbfc'" onmouseout="if(!this.classList.contains('selected'))this.style.background='transparent'">
                                <td style="padding:14px 18px;font-weight:600;color:var(--text);">1037</td>
                                <td style="padding:14px 18px;">
                                    <div style="font-weight:600;color:var(--text);">a.nurlan_kz@mail.ru</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span style="font-weight:700;color:var(--text);">7 592 KZT</span>
                                </td>
                                <td style="padding:14px 18px;color:var(--text-secondary);">
                                    <div>13 фев 2026</div>
                                    <div style="font-size:11px;color:var(--text-muted);">11:30</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span class="order-status status-done">Исполнен</span>
                                </td>
                            </tr>
                            <tr class="order-row" data-client="Esimbek@mail.ru" data-chat="chat-diana" onclick="openChat(this)" style="border-bottom:1px solid var(--border);transition:background 0.1s;cursor:pointer;" onmouseover="this.style.background='#fafbfc'" onmouseout="if(!this.classList.contains('selected'))this.style.background='transparent'">
                                <td style="padding:14px 18px;font-weight:600;color:var(--text);">1036</td>
                                <td style="padding:14px 18px;">
                                    <div style="font-weight:600;color:var(--text);">Esimbek@mail.ru</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span style="font-weight:700;color:var(--text);">16 268 KZT</span>
                                </td>
                                <td style="padding:14px 18px;color:var(--text-secondary);">
                                    <div>12 фев 2026</div>
                                    <div style="font-size:11px;color:var(--text-muted);">21:30</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span class="order-status status-done">Исполнен</span>
                                </td>
                            </tr>
                            <tr class="order-row" data-client="Sssa777@mail.ru" data-chat="chat-sssa" onclick="openChat(this)" style="border-bottom:1px solid var(--border);transition:background 0.1s;cursor:pointer;" onmouseover="this.style.background='#fafbfc'" onmouseout="if(!this.classList.contains('selected'))this.style.background='transparent'">
                                <td style="padding:14px 18px;font-weight:600;color:var(--text);">1035</td>
                                <td style="padding:14px 18px;">
                                    <div style="font-weight:600;color:var(--text);">Sssa777@mail.ru</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span style="font-weight:700;color:var(--text);">7 592 KZT</span>
                                </td>
                                <td style="padding:14px 18px;color:var(--text-secondary);">
                                    <div>12 фев 2026</div>
                                    <div style="font-size:11px;color:var(--text-muted);">19:13</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span class="order-status status-done">Исполнен</span>
                                </td>
                            </tr>
                            <tr class="order-row" data-client="v_kenikh78@mail.ru" data-chat="chat-kenikh" onclick="openChat(this)" style="border-bottom:1px solid var(--border);transition:background 0.1s;cursor:pointer;" onmouseover="this.style.background='#fafbfc'" onmouseout="if(!this.classList.contains('selected'))this.style.background='transparent'">
                                <td style="padding:14px 18px;font-weight:600;color:var(--text);">1034</td>
                                <td style="padding:14px 18px;">
                                    <div style="font-weight:600;color:var(--text);">v_kenikh78@mail.ru</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span style="font-weight:700;color:var(--text);">7 592 KZT</span>
                                </td>
                                <td style="padding:14px 18px;color:var(--text-secondary);">
                                    <div>12 фев 2026</div>
                                    <div style="font-size:11px;color:var(--text-muted);">16:40</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span class="order-status status-done">Исполнен</span>
                                </td>
                            </tr>
                            <tr class="order-row" data-client="Murat.serikov.93@mail.ru" data-chat="chat-murat" onclick="openChat(this)" style="border-bottom:1px solid var(--border);transition:background 0.1s;cursor:pointer;" onmouseover="this.style.background='#fafbfc'" onmouseout="if(!this.classList.contains('selected'))this.style.background='transparent'">
                                <td style="padding:14px 18px;font-weight:600;color:var(--text);">1033</td>
                                <td style="padding:14px 18px;">
                                    <div style="font-weight:600;color:var(--text);">Murat.serikov.93@mail.ru</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span style="font-weight:700;color:var(--text);">7 592 KZT</span>
                                </td>
                                <td style="padding:14px 18px;color:var(--text-secondary);">
                                    <div>12 фев 2026</div>
                                    <div style="font-size:11px;color:var(--text-muted);">16:20</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span class="order-status status-done">Исполнен</span>
                                </td>
                            </tr>
                            <tr class="order-row" data-client="a888bb@mail.ru" data-chat="chat-a888" onclick="openChat(this)" style="border-bottom:1px solid var(--border);transition:background 0.1s;cursor:pointer;" onmouseover="this.style.background='#fafbfc'" onmouseout="if(!this.classList.contains('selected'))this.style.background='transparent'">
                                <td style="padding:14px 18px;font-weight:600;color:var(--text);">1032</td>
                                <td style="padding:14px 18px;">
                                    <div style="font-weight:600;color:var(--text);">a888bb@mail.ru</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span style="font-weight:700;color:var(--text);">7 592 KZT</span>
                                </td>
                                <td style="padding:14px 18px;color:var(--text-secondary);">
                                    <div>12 фев 2026</div>
                                    <div style="font-size:11px;color:var(--text-muted);">10:58</div>
                                </td>
                                <td style="padding:14px 18px;">
                                    <span class="order-status status-done">Исполнен</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Чат с клиентом -->
            <div class="card chat-card" id="chatPanel" style="display:none;">
                <div class="card-header">
                    <span class="card-title" id="chatClientName">Чат</span>
                    <button onclick="closeChat()" style="background:none;border:none;cursor:pointer;color:var(--text-muted);font-size:18px;line-height:1;">&times;</button>
                </div>

                <div class="chat-messages" id="chatMessages">
                    <!-- Переписки подгружаются через JS -->
                </div>

                <!-- Typing indicator -->
                <div class="typing-indicator" id="typingIndicator" style="display:none;">
                    <div class="typing-dots"><span></span><span></span><span></span></div>
                    Печатает...
                </div>

                <!-- Input -->
                <div class="chat-input-area">
                    <div class="chat-input-wrapper">
                        <textarea id="chatInput" rows="1" placeholder="Напишите ответ..." onkeydown="handleKey(event)" oninput="autoResize(this)"></textarea>
                    </div>
                    <button class="chat-send-btn" onclick="sendMessage()">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    const chats = {
        'chat-aben': [
            { type: 'user', avatar: 'A', text: 'здраствуйте оплатил на карту', time: '20:15' },
            { type: 'admin', avatar: 'П', text: 'Здравствуйте, принял', time: '20:18' },
            { type: 'user', avatar: 'A', text: 'когда акаунт будет?', time: '20:19' },
            { type: 'admin', avatar: 'П', text: 'В течение 12 часов, отправлю на почту', time: '20:20' },
            { type: 'user', avatar: 'A', text: 'хорошо', time: '20:21' },
            { type: 'admin', avatar: 'П', text: 'Отправил на почту, проверьте', time: '21:45' },
            { type: 'user', avatar: 'A', text: 'получил', time: '22:03' },
        ],
        'chat-ddd': [
            { type: 'user', avatar: 'D', text: 'здравствуйте перевел, аккаунт с тратоми 100 нужен', time: '12:40' },
            { type: 'admin', avatar: 'П', text: 'Здравствуйте, оплату получил', time: '12:55' },
            { type: 'user', avatar: 'D', text: 'скока ждать?', time: '12:56' },
            { type: 'admin', avatar: 'П', text: 'До 12 часов, отправлю данные на почту', time: '12:57' },
            { type: 'user', avatar: 'D', text: 'ладно', time: '12:58' },
            { type: 'admin', avatar: 'П', text: 'Отправил на ddddreasa83@list.ru', time: '15:20' },
            { type: 'user', avatar: 'D', text: 'получил пока', time: '15:40' },
        ],
        'chat-ivanova': [
            { type: 'user', avatar: 'К', text: 'Добрый вечер, перевела на карту', time: '18:30' },
            { type: 'admin', avatar: 'П', text: 'Добрый вечер, принял оплату', time: '18:45' },
            { type: 'admin', avatar: 'П', text: 'Отправил на почту, проверьте', time: '22:10' },
            { type: 'user', avatar: 'К', text: 'Получила', time: '22:30' },
        ],
        'chat-malikov': [
            { type: 'user', avatar: 'С', text: 'Здравствуйте, оплатил за аккаунт с тратами 10', time: '09:24' },
            { type: 'admin', avatar: 'П', text: 'Здравствуйте, оплату вижу', time: '09:40' },
            { type: 'user', avatar: 'С', text: 'Когда будет готов?', time: '09:41' },
            { type: 'admin', avatar: 'П', text: 'Сегодня отправлю, до вечера', time: '09:42' },
            { type: 'user', avatar: 'С', text: 'Ок', time: '09:43' },
            { type: 'admin', avatar: 'П', text: 'Готово, данные на почте', time: '17:05' },
            { type: 'user', avatar: 'С', text: 'Получил', time: '17:20' },
        ],
        'chat-a888': [
            { type: 'user', avatar: 'A', text: 'переслал, дайте доступ', time: '10:58' },
            { type: 'admin', avatar: 'П', text: 'Принял', time: '11:10' },
            { type: 'admin', avatar: 'П', text: 'Отправил на почту', time: '14:30' },
            { type: 'user', avatar: 'A', text: 'получил', time: '14:50' },
        ],
        'chat-murat': [
            { type: 'user', avatar: 'М', text: 'эти аккаунты рабочие? я могу запустить рекламу на туристическую компанию?', time: '16:20' },
            { type: 'admin', avatar: 'П', text: 'Да конечно, аккаунты полностью рабочие', time: '16:22' },
            { type: 'user', avatar: 'М', text: 'сейчас переведу', time: '16:23' },
            { type: 'user', avatar: 'М', text: 'перевел', time: '16:30' },
            { type: 'admin', avatar: 'П', text: 'Принял, отправлю на почту', time: '16:35' },
            { type: 'admin', avatar: 'П', text: 'Отправил', time: '19:00' },
            { type: 'user', avatar: 'М', text: 'получил', time: '19:20' },
        ],
        'chat-kenikh': [
            { type: 'user', avatar: 'V', text: 'оплатилм, срочно скиньте пожалуйста', time: '16:40' },
            { type: 'admin', avatar: 'П', text: 'Принял оплату', time: '16:50' },
            { type: 'admin', avatar: 'П', text: 'Отправил на почту', time: '19:15' },
            { type: 'user', avatar: 'V', text: 'получил', time: '19:30' },
        ],
        'chat-sssa': [
            { type: 'user', avatar: 'S', text: 'один аккаунт пожалуйста, на эту почту', time: '19:13' },
            { type: 'admin', avatar: 'П', text: 'Принял, сделаю', time: '19:20' },
            { type: 'admin', avatar: 'П', text: 'Отправил на почту', time: '21:45' },
            { type: 'user', avatar: 'S', text: 'получил', time: '22:00' },
        ],
        'chat-diana': [
            { type: 'user', avatar: 'E', text: 'я перевел, нужно запустить рекламу, поможете?', time: '21:30' },
            { type: 'admin', avatar: 'П', text: 'Добрый вечер, оплату получил', time: '21:40' },
            { type: 'admin', avatar: 'П', text: 'Данные аккаунта отправил на почту', time: '22:50' },
            { type: 'user', avatar: 'E', text: 'получил', time: '23:05' },
            { type: 'admin', avatar: 'П', text: 'А зачем вы столько отправили, 7 раз одно и тоже? Напишите карту, я вам верну деньги', time: '23:10' },
            { type: 'admin', avatar: 'П', text: '???', time: '23:35' },
        ],
        'chat-nurlan': [
            { type: 'user', avatar: 'А', text: 'деньги перевел, мне нужен аккаунт на 10 долларов, передайте пожалуйста', time: '11:30' },
            { type: 'admin', avatar: 'П', text: 'Здравствуйте, оплату принял', time: '11:45' },
            { type: 'admin', avatar: 'П', text: 'Отправил на почту', time: '14:10' },
            { type: 'user', avatar: 'А', text: 'Получил, спасибо', time: '14:25' },
        ],
        'chat-bekzat': [
            { type: 'user', avatar: 'Б', text: 'здраствуйте, скинул на карту', time: '16:51' },
            { type: 'user', avatar: 'Б', text: 'алоо, вы где?? когда скините акаунт', time: '19:55' },
            { type: 'admin', avatar: 'П', text: 'Здравствуйте, извините за задержку, уже сделал', time: '20:03' },
            { type: 'admin', avatar: 'П', text: 'Отправил на почту, проверяйте', time: '20:04' },
            { type: 'user', avatar: 'Б', text: 'ок получил', time: '20:18' },
        ]
    };

    let currentChat = null;

    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('open');
        document.getElementById('sidebarOverlay').classList.toggle('open');
    }

    function openChat(row) {
        document.querySelectorAll('.order-row').forEach(r => { r.classList.remove('selected'); r.style.background = 'transparent'; });
        row.classList.add('selected');
        row.style.background = 'var(--primary-light)';
        const client = row.getAttribute('data-client');
        currentChat = row.getAttribute('data-chat');
        document.getElementById('chatClientName').textContent = client;
        document.getElementById('chatPanel').style.display = 'flex';
        renderChat(currentChat);
    }

    function renderChat(chatId) {
        const container = document.getElementById('chatMessages');
        container.innerHTML = '<div class="chat-date-divider">15 февраля 2026</div>';
        const messages = chats[chatId] || [];
        messages.forEach(m => {
            const div = document.createElement('div');
            div.className = 'message ' + m.type;
            div.innerHTML = '<div class="msg-avatar ' + (m.type === 'admin' ? 'admin-av' : 'user-av') + '">' + m.avatar + '</div>' +
                '<div class="msg-content"><div class="msg-bubble">' + m.text + '</div><span class="msg-time">' + m.time + '</span></div>';
            container.appendChild(div);
        });
        container.scrollTop = container.scrollHeight;
    }

    function closeChat() {
        document.getElementById('chatPanel').style.display = 'none';
        document.querySelectorAll('.order-row').forEach(r => { r.classList.remove('selected'); r.style.background = 'transparent'; });
        currentChat = null;
    }

    function autoResize(textarea) {
        textarea.style.height = 'auto';
        textarea.style.height = Math.min(textarea.scrollHeight, 120) + 'px';
    }

    function handleKey(e) {
        if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); sendMessage(); }
    }

    function sendMessage() {
        const input = document.getElementById('chatInput');
        const text = input.value.trim();
        if (!text || !currentChat) return;
        const now = new Date();
        const time = now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');
        chats[currentChat].push({ type: 'admin', avatar: 'П', text: text, time: time });
        const container = document.getElementById('chatMessages');
        const div = document.createElement('div');
        div.className = 'message admin';
        div.innerHTML = '<div class="msg-avatar admin-av">П</div><div class="msg-content"><div class="msg-bubble">' + text + '</div><span class="msg-time">' + time + '</span></div>';
        container.appendChild(div);
        container.scrollTop = container.scrollHeight;
        input.value = '';
        input.style.height = 'auto';
    }
</script>

</body>
</html>
