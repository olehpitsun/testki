package SOLID.OC;

/**
 * Created by Oleh on 12.11.2017.
 */
public class FileLogger implements ILogger {


    @Override
    public void log(String message) {
        saveToFile(message);
    }

    private void saveToFile(String message){

    }
}
