package SOLID.OC;

/**
 * Created by Oleh on 12.11.2017.
 */
public class DBLogger implements ILogger {


    @Override
    public void log(String message) {
        saveToDB(message);
    }

    private void saveToDB(String mess){

    }
}
