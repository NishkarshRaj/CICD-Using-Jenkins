# Creating Chain of Jenkins job

1. Create multiple jobs doing some tasks (Example: Executing Windows Batch command)
2. Connect each task with build trigger by successful build of previous task in pipeline.
3. Build Initial Task.
4. Download Delivery Pipeline Plugin.
5. Create new view -> Delivery Pipeline view -> Add componenent -> Initial Job == First Task.
