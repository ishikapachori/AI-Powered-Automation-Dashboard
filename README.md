# AI-Powered-Automation-Dashboard
This project is specifically designed for ITG, DRDO SSPL and features a comprehensive suite of 50 AI automation tools powered by LLaMA3 integration through Ollama. The dashboard provides both unified access and individual tool functionality for maximum flexibility.

Project Architecture
The project is structured with 50 separate folders, each containing an independent AI automation tool that can be run standalone or accessed through the main dashboard. This modular design ensures scalability and ease of maintenance.

Key Files:

•	DASH.html - Main dashboard HTML interface

•	1index.php - Primary PHP file to launch the complete dashboard

•	Individual tool folders - Each tool operates independently

Installation & Setup Guide

Step 1: Install Ollama

Download and install Ollama from the official website:

Download Link: https://ollama.com/download/windows

After installation, verify the service is running by opening a terminal and executing:

ollama serve


Step 2: Download LLaMA3 Model

Once Ollama is confirmed running, download the LLaMA3 model:

ollama run llama3

Step 3: Install XAMPP

Download XAMPP Control Panel from:

Download Link: https://www.apachefriends.org/download.html

After installation, launch XAMPP Control Panel and start Apache service. Ensure the Apache status indicator turns green.

Step 4: Launch the Dashboard

Navigate to your browser and access:

http://localhost/1index.php

The complete AI automation dashboard will open, providing access to all 50 tools.

Individual Tool Access

Each of the 50 AI automation tools can be accessed independently using:

http://localhost/folder-name

Replace folder-name with the specific tool directory you want to access.

Tool Categories Available


The 50 AI automation tools are organized across multiple categories including:

•	Language & Text Utilities

•	Education Tools

•	AI Writing Assistant

•	Multilingual & Culture Tools

•	Document & Content Automation

•	HR & Staff Management

•	Task & Workflow Automation

•	Operations & Planning

•	Internal Chatbots & Knowledge Assistants


Technical Requirements

•	Backend: PHP (via XAMPP Apache server)

•	Frontend: HTML/JavaScript

•	AI Engine: LLaMA3 via Ollama

This modular approach ensures that ITG DRDO SSPL can utilize individual tools as needed while maintaining access to the comprehensive dashboard for broader operational requirements.

