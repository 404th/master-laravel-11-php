<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Card</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
            }

            header {
                text-align: center;
                padding: 20px;
                background-color: #007BFF;
                color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            header h1 {
                margin: 0;
                font-size: 2rem;
            }

            .task-list-container {
                max-width: 800px;
                margin: 40px auto;
                padding: 20px;
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .task-list-container h2 {
                margin-bottom: 20px;
                font-size: 1.5rem;
                color: #007BFF;
                text-align: center;
            }

            .task-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 15px;
                border: 1px solid #ddd;
                border-radius: 5px;
                margin-bottom: 10px;
                background-color: #f9f9f9;
                transition: background-color 0.3s, box-shadow 0.3s;
            }

            .task-item a {
                text-decoration: none;
                color: #007BFF;
                font-weight: bold;
            }

            .task-item a:hover {
                text-decoration: underline;
            }

            .task-item:hover {
                background-color: #f1f9ff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .no-tasks {
                text-align: center;
                color: #555;
                font-size: 1rem;
                padding: 20px;
            }

                .task-card {
                    border: 1px solid #ddd;
                    border-radius: 10px;
                    background-color: #fff;
                    padding: 20px;
                    max-width: 400px;
                    width: 90%;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    box-sizing: border-box;
                }

                .task-card h3 {
                    margin: 0 0 10px;
                    color: #333;
                }

                .task-card p {
                    margin: 0 0 8px;
                    color: #555;
                    line-height: 1.5;
                }

                .task-card a {
                    display: inline-block;
                    margin-top: 20px;
                    padding: 12px 18px;
                    text-decoration: none;
                    background-color: #007BFF;
                    color: #fff;
                    border-radius: 5px;
                    font-weight: bold;
                    text-align: center;
                    width: 100%;
                    box-sizing: border-box;
                }

                .task-card a:hover {
                    background-color: #0056b3;
                }

                .task-card strong {
                    color: #333;
                }
        </style>
    </head>
    <body>
        <header>
            <h1>
                @yield('title')
            </h1>
        </header>
        @yield('content')
    </body>
</html>